<script setup>
    import AppLayout from '@/Layouts/Vristo/AppLayout.vue';
    import { useForm, router } from '@inertiajs/vue3';
    import { faTimes, faCopy, faGears } from "@fortawesome/free-solid-svg-icons";
    import Pagination from '@/Components/Pagination.vue';
    import Keypad from '@/Components/Keypad.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import { ref } from 'vue';
    import ModalSmall from '@/Components/ModalSmall.vue';
    import swal from "sweetalert";
    import { Link } from '@inertiajs/vue3';
    import { Badge } from 'flowbite-vue'
    import { ConfigProvider, Dropdown,Menu,MenuItem,Button } from 'ant-design-vue';
    import Navigation from '@/Components/vristo/layout/Navigation.vue';

    const props = defineProps({
        sales: {
            type: Object,
            default: () => ({}),
        },
        filters: {
            type: Object,
            default: () => ({}),
        },
    });

    const form = useForm({
        search: props.filters.search,
    });
    
    const printTicket = (id) => {
        //window.location.href = "../pdf/sales/ticket/" + id;
        let url = route('ticketpdf_sales',id)
        window.open(url, "_blank");
    }
    const printA4Pdf = (id) => {
        let url = route('printA4pdf_sales',id)
        window.open(url, "_blank");
    }


    const displayModalPrint = ref(false);

    const formPrint = useForm({
        date: '',
    });

    const openPrintSaleDay = async () => {
        
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)mes='0'+mes //agrega cero si el menor de 10
        fecha = ano + "-" + mes + "-" + dia;
        formPrint.date = fecha;
        displayModalPrint.value = true;
    }
    const closePrintSaleDay = async () => {
        displayModalPrint.value = false;
    }

    const printSales = () => {
        let url = route('print_sale_user',formPrint.date)
        window.open(url, "_blank");
        //window.location.href = "../print/sales/user/" + formPrint.date;
    }

    const deleteSale = (id) => {
        swal({
            title: "Estas seguro",
            text: "No podrás revertir esto!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                axios({
                    method: 'delete',
                    url: route('sales.destroy',id),
                }).then((response) => {
                    swal(response.data.message);
                    router.visit(route('sales.index'), {
                        method: 'get',
                        replace: false,
                        preserveState: true,
                        preserveScroll: true,
                    });
                }).catch(function (error) {
                    console.log(error)
                });
            } 
        });
    }
</script>

<template>
    <AppLayout title="Ventas">
        <Navigation :routeModule="route('sales_dashboard')" :titleModule="'Ventas'">
            <li class="before:content-['/'] ltr:before:mr-2 rtl:before:ml-2">
                <span>Punto de Ventas</span>
            </li>
        </Navigation>
        <div class="mt-5">
            <!-- ====== Table Section Start -->
            <div class="flex flex-col gap-10">
                <!-- ====== Table One Start -->
                <div class="panel p-0">
                    <div class="w-full p-4">
                        <div class="grid grid-cols-3">
                            <div class="col-span-3 sm:col-span-1">
                                <form @submit.prevent="form.get(route('sales.index'))">
                                <label for="table-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input v-model="form.search" type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar por cliente">
                                    </div>
                                </form>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <Keypad>
                                    <template #botones>
                                        <PrimaryButton
                                            class="mr-2"
                                            @click="openPrintSaleDay()"
                                        >
                                            Imprimir Ventas Del día
                                        </PrimaryButton>
                                        <Link :href="route('sales.create')" class="inline-block px-6 py-2.5 bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Nuevo</Link>
                                    </template>
                                </Keypad>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <ConfigProvider>
                        <table >
                            <thead >
                                <tr >
                                    <th>
                                        Acciones
                                    </th>
                                    <th >
                                        Documento 
                                    </th>
                                    <th >
                                        Nmr. Ticket
                                    </th>
                                    <th >
                                        Fecha
                                    </th>
                                    <th >
                                        Cliente
                                    </th>
                                    <th >
                                        Total
                                    </th>
                                    <th >
                                        Estado
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(sale, index) in sales.data" :key="sale.id" >
                                    <td >
                                        <Dropdown :placement="'bottomLeft'">
                                            <button class="border py-1.5 px-2 dropdown-button inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm" type="button">
                                                <font-awesome-icon :icon="faGears" />
                                            </button>
                                            <template #overlay>
                                                <Menu>
                                                    <MenuItem>
                                                        <Button @click="printA4Pdf(sale.id)" type="button">
                                                            pdf A4
                                                        </Button>
                                                    </MenuItem>
                                                    <MenuItem>
                                                        <Button @click="printTicket(sale.id)" type="button">
                                                            pdf 80x250
                                                        </Button>
                                                    </MenuItem>
                                                    <MenuItem v-if="sale.have_document <= 1">
                                                        <Button v-role="'admin'" type="Link" :href="route('saledocuments_create_from_ticket',sale.id)">
                                                            Crear Documento Venta
                                                        </Button>
                                                    </MenuItem>
                                                    <MenuItem  v-role="'admin'" >
                                                        <Button type="button" @click="deleteSale(sale.id)" >
                                                            Anular
                                                        </Button>
                                                    </MenuItem>
                                                </Menu>
                                            </template>
                                        </Dropdown>
                                    </td>
                                    <td >
                                        {{ sale.name_document }}  
                                    </td>
                                    <td >
                                        {{ sale.serie }}-{{ sale.number }}
                                    </td>
                                    <td >
                                        {{ sale.fecha }}
                                    </td>
                                    <td >
                                        {{ sale.full_name }}
                                    </td>
                                    <td >
                                        {{ sale.total }}
                                    </td>
                                    <td >
                                        <template v-if="sale.have_document <= 1">
                                            <Badge v-if="sale.status == 1" type="yellow">Registrado</Badge>
                                            <Badge v-else-if="sale.status == 9" type="yellow">Con documento vinculado</Badge>
                                            <Badge v-else type="red">Anulado</Badge>
                                        </template>
                                        <template v-else>
                                            <Badge type="purple">
                                                con documento
                                            </Badge>
                                        </template>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        </ConfigProvider>
                    </div>
                    <Pagination :data="sales" />
                </div>
            </div>
        </div>
        <ModalSmall
            :show="displayModalPrint"
            :onClose="closePrintSaleDay"
        >
            <template #title>
                Imprimir Ventas del Día
            </template>
            <template #content>
                <input type="date" v-model="formPrint.date"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none dark:text-white dark:bg-gray-700"
                />
            </template>
            <template #buttons>
               <PrimaryButton
                    @click="printSales()"
                    class="mr-2"
               >Imprimir</PrimaryButton> 
            </template>
        </ModalSmall>
    </AppLayout>
</template>