<template>
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form @submit.prevent="submitForm">
                        <!-- Title -->
                        <div class="mb-3">
                            <label for="post-title" class="form-label">
                                Название
                            </label>
                            <input v-model="post.title" id="post-title" type="text" class="form-control">
                            <div class="text-danger mt-1">
                                {{ errors.title }}
                            </div>
                            <div class="text-danger mt-1">
                                <div v-for="message in validationErrors?.title" :key="message.title">
                                    {{ message }}
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="mb-3">
                            <label for="post-content" class="form-label">
                                Описание
                            </label>
                            <textarea v-model="post.content" id="post-content" class="form-control"></textarea>
                            <div class="text-danger mt-1">
                                {{ errors.content }}
                            </div>
                            <div class="text-danger mt-1">
                                <div v-for="message in validationErrors?.content" :key="message.content">
                                    {{ message }}
                                </div>
                            </div>
                        </div>
                        <!-- Category -->
                        <div class="mb-3">
                            <label for="post-category" class="form-label">
                                Категория
                            </label>
                            <v-select v-model="post.category_id" :options="categoryList" :reduce="category => category.id" label="name" class="form-control" />
                            <div class="text-danger mt-1">
                                {{ errors.category_id }}
                            </div>
                            <div class="text-danger mt-1">
                                <div v-for="message in validationErrors?.category_id" :key="message.category_id">
                                    {{ message }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">
                                Миниатюра
                            </label>
                            <input @change="post.thumbnail = $event.target.files[0]" type="file" class="form-control" id="thumbnail" />
                            <div class="text-danger mt-1">
                                <div v-for="message in validationErrors?.thumbnail" :key="message.thumbnail">
                                    {{ message }}
                                </div>
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="mt-4">
                            <button :disabled="isLoading" class="btn btn-primary">
                                <div v-show="isLoading" class=""></div>
                                <span v-if="isLoading">Загрузка...</span>
                                <span v-else>Создать</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import { onMounted, reactive } from "vue";
    import useCategories from "@/composables/categories";
    import usePosts from "@/composables/posts";
    import { useForm, useField, defineRule } from "vee-validate";
    import { required, min } from "../../../validation/rules"
    defineRule('required', required)
    defineRule('min', min);

    // Define a validation schema
    const schema = {
        title: 'required|min:5',
        content: 'required|min:50',
        category_id: 'required'
    }
    // Create a form context with the validation schema
    const { validate, errors } = useForm({ validationSchema: schema })
    // Define actual fields for validation
    const { value: title } = useField('title', null, { initialValue: '' });
    const { value: content } = useField('content', null, { initialValue: '' });
    const { value: category_id } = useField('category_id', null, { initialValue: '', label: 'category' });
    const { categoryList, getCategoryList } = useCategories()
    const { storePost, validationErrors, isLoading } = usePosts()
    const post = reactive({
        title,
        content,
        category_id,
        thumbnail: ''
    })
    function submitForm() {
        validate().then(form => { if (form.valid) storePost(post) })
    }
    onMounted(() => {
        getCategoryList()
    })
</script>
