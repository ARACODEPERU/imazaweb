<script setup>
    import AppLayout from '@/Layouts/Vristo/AppLayout.vue';
    import CreateForm from '@/Pages/Establishments/Partials/CreateForm.vue';

    const props = defineProps({
        users: {
            type: Object,
            default: () => ({}),
        },
        ubigeo: {
            type: Object,
            default: () => ({}),
        }
    });
    
</script>

<template>
    <AppLayout title="Crear Tienda">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Nueva Tienda
            </h2>
        </template>
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <CreateForm :users="users" :ubigeo="ubigeo" />
            </div>
        </div>
    </AppLayout>
</template>
