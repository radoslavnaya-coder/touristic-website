<template>
<header class="banner-bg">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <router-link to="/" class="navbar-brand navbar-script">Welcome</router-link>

            <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mt-2 mt-lg-0 me-auto mb-2 mb-lg-0">
                    <LocaleSwitcher />
                </ul>
            <a href="" class="mx-3 category__text2">{{ $t("entertainment")}}</a>
            <a href="" class="mx-3 category__text2">{{ $t("food")}}</a>
            <a href="" class="mx-3 category__text2">{{ $t("exciting")}}</a>
                <ul class="navbar-nav mt-2 mt-lg-0 ms-auto">
                    <template v-if="!user?.name">
                        <!-- <li class="nav-item">
                            <router-link to="/" class="nav-link" aria-current="page">{{ $t('Home') }}</router-link>
                        </li> -->
                        <!-- <li class="nav-item">
                            <router-link :to="{ name : 'public-posts.index'}" class="nav-link">Blog</router-link>
                        </li> --> 
                            <li class="nav-item login-button">
                            <router-link class="nav-link login-button" to="/login"
                            >{{ $t("login") }}</router-link>
                            
                        </li>
                        
                        
                        <!-- <li class="nav-item">
                            <router-link class="nav-link" to="/register">{{ $t('register') }}</router-link>
                        </li> -->
                    </template>
                    <li v-if="user?.name" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ user.name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><router-link class="dropdown-item" to="/admin">Админ-панель</router-link></li>
                            <li><router-link to="/admin/posts" class="dropdown-item">Публикация</router-link></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" @click="logout">Выйти</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="category-type">
        <div class="container my-2">
            <a href="" class="mx-3 category__text">{{ $t("Для интровертов")}}</a>
            <a href="" class="mx-3 category__text">{{ $t("Гастро-тур")}}</a>
            <a href="" class="mx-3 category__text">{{ $t("Достопримечательности")}}</a>
        </div>
    </nav>
</header>
</template>

<script setup>
import { useStore} from "vuex";
import useAuth from "@/composables/auth";
import {computed} from "vue";
import LocaleSwitcher from "../components/LocaleSwitcher.vue";

    const store = useStore();
    const user = computed(() => store.getters["auth/user"])
    const { processing, logout } = useAuth();
</script>
<style scoped>
.banner-bg{
    background: url('@/images/banner-bg-1980.png') no-repeat;
    background-size: 75vw;
}
.login-button{
    background: black;
    color: white;
    width: 6vw;
    border-radius: 30px;
    text-align: center;
    border: none;
}
.category-type{
    text-align: center;
    }
    .category__text{
        font-size: 14px;
    }
    .category__text2{
        font-size: 18px;
    }
    .navbar-script{
        font-family: 'Italiana' !important;
        font-size: 40px;
    }
</style>
