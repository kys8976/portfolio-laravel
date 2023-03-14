<template>
    <Base />
    <main class="main">
        <div class="main__sideNav"></div>
        <div class="main__content">
            <h1>Skills component index</h1>
        </div>
    </main>
</template>

<script setup>
import Base from "../layouts/base.vue";
import { onMounted, ref } from "vue";

let services = ref([]);
let form = ref({
    name: "",
    icon: "",
    description: "",
});
const showModal = ref(false);
const hideModal = ref(true);
const editMode = ref(true);

onMounted(async () => {
    getServices();
});

const getServices = async () => {
    let response = await axios.get("/api/get_all_service");
    console.log(response);
    services.value = response.data.services;
};

const openModal = () => {
    showModal.value = !showModal.value;
    editMode.value = false;
};

const closeModal = () => {
    showModal.value = !hideModal.value;
    form.value = {};
};

const createService = async () => {
    console.log('create')
    await axios.post("/api/create_service", form.value).then((response) => {
        getServices();
        closeModal();
        toast.fire({
            icon: "success",
            title: "Service add Successfully",
        });
    });
};

const editModal = (service) => {
    editMode.value = true;
    showModal.value = !showModal.value;
    form.value = service;
};

const updateService = async () => {
    await axios
        .post("/api/update_service/" + form.value.id, form.value)
        .then((response) => {
            getServices();
            closeModal();
            toast.fire({
                icon: "success",
                title: "Service update Successfully",
            });
        });
};

const deleteService = async (id) => {
    Swal.fire({
        title: 'Are yot Sure ?',
        text: "You can't go back",
        icon: 'warning',
        showCancelButton: true,
        confirmbuttonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    })
    .then((result)=>{
        if(result.value){
             axios.get('/api/delete_service/'+id)
        .then((response) => {
            Swal.fire(
                'Delete',
                'Service delete successfully',
                'success'
            )
            getServices()
        });
        }
    })
};
</script>
