<script setup>
import { useForm } from '@inertiajs/vue3';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Keypad from '@/Components/Keypad.vue';
import { ref, onMounted, reactive, nextTick  } from 'vue';
import Editor from '@tinymce/tinymce-vue'
import TextInput from '@/Components/TextInput.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';


    const props = defineProps({
        categories: {
            type: Object,
            default: () => ({})
        },
        tiny_api_key: {
            type: String,
            default: null,
        }
    });

    const form = useForm({
        title: '',
        category_id: '',
        content_text: '',
        description:'',
        status: true,
        file: '',
        keywords: []
    });

    const photoPreview = ref(null);
    const photoInput = ref(null);

    const createArticle = () => {
        if (photoInput.value) {
            form.file = photoInput.value.files[0];
        }

        if (inputKeyword.value) {
            form.keywords = keywords.value;
        }

        form.post(route('blog-article.store'), {
            forceFormData: true,
            errorBag: 'createArticle',
            preserveScroll: true,
            preserveScroll: true
        });
    };
    const uploadImage = (blobInfo, progress) => {
        return new Promise((resolve, reject) => {
            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            axios.post(route('blog_article_uploa_image_tiny'), formData, {
                withCredentials: false,
                onUploadProgress: (e) => {
                    progress(e.loaded / e.total * 100);
                }
            }).then(response => {
                if (response.status === 403) {
                    reject({ message: 'HTTP Error: ' + response.status, remove: true });
                    return;
                }

                if (response.status < 200 || response.status >= 300) {
                    reject('HTTP Error: ' + response.status);
                    return;
                }

                const json = response.data;

                if (!json || typeof json.location !== 'string') {
                    reject('Invalid JSON: ' + JSON.stringify(json));
                    return;
                }
                resolve(json.location);
            }).catch(error => {
                reject('Image upload failed due to a XHR Transport error. Error: ' + error.message);
            });
        });
    };

    const selectNewPhoto = () => {
        photoInput.value.click();
    };

    const updatePhotoPreview = () => {
        const photo = photoInput.value.files[0];

        if (! photo) return;

        const reader = new FileReader();

        reader.onload = (e) => {
            photoPreview.value = e.target.result;
        };

        reader.readAsDataURL(photo);
    };

    const inputKeyword = ref(null);
    const addkeyword = () => {
        form.keywords.push(inputKeyword.value)
        inputKeyword.value = null;
    }

    const removekeyword = (index) => {
        form.keywords.splice(index,1);
    }
</script>

<template>
    <FormSection @submitted="createArticle">
        <template #title>
            Articulo Detalles
        </template>

        <template #description>
            Todos los campos con * son obligatorios
        </template>

        <template #form>
            
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="title" value="Titulo *" />
                <TextInput
                    id="title"
                    v-model="form.title"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                    autocomplete="off"
                />
                <InputError :message="form.errors.title" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="description" value="description *" />
                <textarea v-model="form.description" rows="2" class="form-textarea"></textarea>
                <InputError :message="form.errors.description" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="content" value="Contenido *" />
                <Editor
                    :api-key="tiny_api_key"
                    v-model="form.content_text"
                    :init="{
                        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                        images_upload_handler: uploadImage,
                        language: 'es',
                    }"
                    :images_file_types="'jpg,svg,webp'"
                    :images_upload_url="route('blog_article_uploa_image_tiny')"
                />

                <InputError :message="form.errors.content_text" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <div>
                    <!-- Profile Photo File Input -->
                    <input
                        ref="photoInput"
                        type="file"
                        class="hidden"
                        @change="updatePhotoPreview"
                    >
                    <InputLabel for="photo" value="Photo" />
                    <!-- Current Profile Photo -->
                    <div v-show="!photoPreview" class="mt-2">
                        <img :src="form.file_view" :alt="form.title" class="object-cover" style="width: 200px;" />
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div v-show="photoPreview" class="mt-2">
                        <img :src="photoPreview" :alt="form.title" class="object-cover" style="width: 200px;" />
                    </div>

                    <SecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewPhoto">
                        Seleccione una nueva foto
                    </SecondaryButton>

                    <!-- <SecondaryButton
                        v-if="form.file"
                        type="button"
                        class="mt-2"
                        @click.prevent="deletePhoto"
                    >
                        Eliminar imagen
                    </SecondaryButton> -->

                    <InputError :message="form.errors.file" class="mt-2" />
                </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="category_id" value="Categoría *" />
                <select v-model="form.category_id" id="category_id" class="form-select">
                    <option value="" selected>Seleccionar</option>
                    <option v-for="(category) in categories" :value="category.id">{{ category.description }}</option>
                </select>
                <InputError :message="form.errors.category_id" class="mt-2" />
            </div>
            <div class="col-span-6">
                <InputLabel for="category_id" value="Palabras clave" />
                <div class="grid grid-cols-3 gap-2">
                    <template v-for="(keyword, index) in form.keywords">
                        <span class="badge h-10 m-0 bg-primary p-0 rounded-md flex items-center justify-between text-base">
                            <span class="pl-4">{{ keyword }}</span>
                            <span @click="removekeyword(index)" class="pr-4 cursor-pointer hover:opacity-90">x</span>
                        </span>
                    </template>
                    <input @keydown.enter.stop.prevent="addkeyword" 
                        v-model="inputKeyword" 
                        class="form-input"
                        :maxlength="22" placeholder="Máximo 22 caracteres"
                    />
                </div>
                <InputError :message="form.errors.keywords" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <div class="flex items-center mb-6">
                    <input v-model="form.status" id="checkboxStatus" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkboxStatus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Activo
                    </label>
                </div>
            </div>

        </template>

        <template #actions>
            <Keypad>
                <template #botones>
                    <PrimaryButton
                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Guardar
                    </PrimaryButton>
                    <a :href="route('blog-article.index')"  class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out ml-2">Ir al Listado</a>
                </template>
            </Keypad>
        </template>
    </FormSection>
</template>
