<template>
    <Base />
    <main class="main">
        <div class="main__sideNav"></div>
        <div class="main__content">
            <!--==================== posts ====================-->
            <section class="posts section" id="posts">
                <div class="posts_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>posts</h1>
                        </div>
                        <div class="titlebar_item">
                            <div
                                class="btn btn__open--modal"
                                @click="openModal()"
                            >
                                New post
                            </div>
                        </div>
                    </div>

                    <div class="table">
                        <div class="table_filter">
                            <span class="table_filter-Btn">
                                <i class="fas fa-ellipsis-h"></i>
                            </span>
                            <div>
                                <ul class="table_filter-list">
                                    <li>
                                        <p
                                            class="table_filter-link table_filter-link--active"
                                        >
                                            All
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="table_search">
                            <div class="table_search-wrapper">
                                <select
                                    class="table_search-select"
                                    name=""
                                    id=""
                                >
                                    <option value="">Filter</option>
                                </select>
                            </div>
                            <div class="relative">
                                <i
                                    class="table_search-input--icon fas fa-search"
                                ></i>
                                <input
                                    class="table_search--input"
                                    type="text"
                                    placeholder="Search post"
                                />
                            </div>
                        </div>

                        <div class="post_table-heading">
                            <p>Title</p>
                            <p>Actions</p>
                        </div>
                        <!-- items -->
                        <div
                            class="post_table-items"
                            v-if="posts.length > 0"
                            v-for="item in posts"
                            :key="item.id"
                        >
                            <p>{{ item.title }}</p>
                            <div>
                                <button
                                    class="btn-icon success"
                                    @click="editModal(item)"
                                >
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button
                                    class="btn-icon danger"
                                    @click="deletePost(item.id)"
                                >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------- posts MODAL --------------->
                <div class="modal main__modal" :class="{ show: showModal }">
                    <div class="modal__content">
                        <span
                            class="modal__close btn__close--modal"
                            @click="closeModal()"
                            >×</span
                        >
                        <h3 class="modal__title" v-show="editMode == false">
                            Add post
                        </h3>
                        <h3 class="modal__title" v-show="editMode == true">
                            Update post
                        </h3>
                        <hr class="modal_line" />
                        <br />
                        <form
                            @submit.prevent="
                                editMode ? updatePost() : createPost()
                            "
                        >
                            <div>
                                <p>post Name</p>
                                <input
                                    type="text"
                                    class="input"
                                    v-model="form.name"
                                />

                                <p>Icon Class</p>
                                <input
                                    type="text"
                                    class="input"
                                    v-model="form.icon"
                                />
                                <span style="color: #006fbb"
                                    >Find your suitable icon: Font Awesome</span
                                >

                                <p>Description</p>
                                <textarea
                                    cols="10"
                                    rows="5"
                                    v-model="form.description"
                                ></textarea>
                            </div>
                            <br />
                            <hr class="modal_line" />
                            <div class="model__footer">
                                <button
                                    class="btn mr-2 btn__close--modal"
                                    @click="closeModal()"
                                >
                                    Cancel
                                </button>
                                <button
                                    class="btn btn-secondary"
                                    v-show="editMode == false"
                                >
                                    Save
                                </button>
                                <button
                                    class="btn btn-secondary"
                                    v-show="editMode == true"
                                >
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</template>

<script setup>
import { onMounted, ref } from "vue";
import Base from "../layouts/base.vue";

let posts = ref([]);
let boards = ref([]);
let form = ref({
    name: "",
    icon: "",
    description: "",
});
const showModal = ref(false);
const hideModal = ref(true);
const editMode = ref(true);

onMounted(async () => {
    getPosts();
    getBoards();
});

const getPosts = async () => {
    let response = await axios.get("/api/get_all_post");
    posts.value = response.data.posts;
};

const getBoards = async () => {
    let response = await axios.get("/api/get_all_board");
    console.log(response);
    boards.value = response.data.boards;
};
const openModal = () => {
    showModal.value = !showModal.value;
    editMode.value = false;
};

const closeModal = () => {
    showModal.value = !hideModal.value;
    form.value = {};
};

const createPost = async () => {
    console.log('create')
    await axios.post("/api/create_post", form.value).then((response) => {
        getPosts();
        closeModal();
        toast.fire({
            icon: "success",
            title: "post add Successfully",
        });
    });
};

const editModal = (post) => {
    editMode.value = true;
    showModal.value = !showModal.value;
    form.value = post;
};

const updatePost = async () => {
    await axios
        .post("/api/update_post/" + form.value.id, form.value)
        .then((response) => {
            getPosts();
            closeModal();
            toast.fire({
                icon: "success",
                title: "post update Successfully",
            });
        });
};

const deletePost = async (id) => {
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
             axios.get('/api/delete_post/'+id)
        .then((response) => {
            Swal.fire(
                'Delete',
                'post delete successfully',
                'success'
            )
            getPosts()
        });
        }
    })
};
</script>
