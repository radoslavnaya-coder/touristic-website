<template>
    <img src="@/images/banner-image.png" style="width: 100%; height: 249px" />
    <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8"> -->
            <!-- <div class="flex justify-center pt-8 sm:text-gray-600 dark:text-gray-400 text-sm">
                <h1>{{ $t("welcome_starter_title") }}</h1>
            </div> -->
            <div class="card-deck row justify-content-center mt-5">
                <div class="card col-2 col">
                    <img class="card-img-top image-cropper" src="@/images/lebed-ozero.jpeg" alt="Card image cap" />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Лебединое озеро</h5>
                        <p class="card-text">
                            Озеро расположено около Астраханского Планетария, там...
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 9 минут назад</small
                            >
                        </p>
                    </div>
                </div>
                <div class="card col-2 col">
                    <img class="card-img-top image-cropper" src="@/images/item1__image.png" alt="Card image cap" />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Астраханский кремль</h5>
                        <p class="card-text">
                            Астраханский кремль — историко-архитектурный комплекс, филиал ГБУК АО «Астраханский музей-заповедник», крепость в Астрахани, выстроенная на месте первых фортификационных ...
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 4 минуты назад</small
                            >
                        </p>
                    </div>
                </div>
                <div class="card col-2 col">
                    <img
                        class="card-img-top image-cropper"
                        src="@/images/brats-garden.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Братский садик</h5>
                        <p class="card-text">
                            Братский сад соседствующий с Кремлём может предложить гостям города....
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 4 минуты назад</small
                            >
                        </p>
                    </div>
                </div>
                <div class="card col-2 col">
                    <img
                        class="card-img-top image-cropper"
                        src="@/images/sea-garden.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Морской сад</h5>
                        <p class="card-text">
                            Живописный сад, рядом с Белой крепостью, здесь есть красивая ....
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 5 минут назад</small
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-deck row justify-content-center mt-5 mb-5">
                <div class="card col-2 col">
                    <img class="card-img-top image-cropper" src="@/images/lenin-square.jpg" alt="Card image cap" />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Площадь Ленина</h5>
                        <p class="card-text">
                            Площадь Ленина - популярное место для астраханцев, там находится много скульптур и фонтанов...
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 7 минут назад</small
                            >
                        </p>
                    </div>
                </div>
                <div class="card col-2 col">
                    <img class="card-img-top image-cropper" src="@/images/naberezh.jpg" alt="Card image cap" />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Набережная</h5>
                        <p class="card-text">
                            Набережная - место времяпрепровождения для взрослых и детей. Здесь можно покататься на самокатах, машинках для детей...
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 3 минуты назад</small
                            >
                        </p>
                    </div>
                </div>
                <div class="card col-2 col">
                    <img
                        class="card-img-top image-cropper"
                        src="@/images/12.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Ресторан "12"</h5>
                        <p class="card-text">
                            Ресторан итальянской кухни, славящийся своей изысканной подачей блюд....
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 3 минуты назад</small
                            >
                        </p>
                    </div>
                </div>
                <div class="card col-2 col">
                    <img
                        class="card-img-top image-cropper"
                        src="@/images/cactus.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body bg-gray-100">
                        <h5 class="card-title">Кактусовое поле</h5>
                        <p class="card-text">
                            Небезизвестное кактусовое поле, высаженное вблизи ...
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Обновлено 3 минуты назад</small
                            >
                        </p>
                    </div>
                </div>
            </div>
        <!-- </div>
    </div> -->
    <footer class="footer footer-dark bg-black navbar">
        <div class="container py-5">
            <nav>
             <div class="mx-3">
                <a href="">О нас</a><br>
                <a href="">Поддержать проект</a>    
            </div>
            <div class="mx-3">
                <a href="">Поделиться</a><br>
                <a href="">Предложить место</a>
            </div>   
            </nav>
            <router-link to="/" class="footer__name nav-item">Welcome</router-link>
        </div>
    </footer>
</template>

<script setup>

</script>

<style scoped>
footer *{
    color: white;
}
.image-cropper{
    width: 100%;
    height: 20vh;
}
nav{
    display: inline-flex;
}
.footer__name{
    text-align: right;
    font-family: 'Italiana';
    font-size: 40px;
}
body {
    font-family: "Oswald", sans-serif;
}
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
}
body {
    margin: 0;
}
a {
    background-color: transparent;
}
[hidden] {
    display: none;
}
html {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
        Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji,
        Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    line-height: 1.5;
}
*,
:after,
:before {
    box-sizing: border-box;
    border: 0 solid #e2e8f0;
}
a {
    color: inherit;
    text-decoration: inherit;
}
svg,
video {
    display: block;
    vertical-align: middle;
}
video {
    max-width: 100%;
    height: auto;
}
.bg-white {
    --bg-opacity: 1;
    background-color: #fff;
    background-color: rgba(255, 255, 255, var(--bg-opacity));
}
.bg-gray-100 {
    --bg-opacity: 1;
    background-color: #D9D9D9;
    background-color: rgba(247, 250, 252, var(--bg-opacity));
    border-radius: 10px;
}
.border-gray-200 {
    --border-opacity: 1;
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--border-opacity));
}
.border-t {
    border-top-width: 1px;
}
.flex {
    display: flex;
}
.grid {
    display: grid;
}
.hidden {
    display: none;
}
.items-center {
    align-items: center;
}
.justify-center {
    justify-content: center;
}
.font-semibold {
    font-weight: 600;
}
.h-5 {
    height: 1.25rem;
}
.h-8 {
    height: 2rem;
}
.h-16 {
    height: 4rem;
}
.text-sm {
    font-size: 0.875rem;
}
.text-lg {
    font-size: 1.125rem;
}
.leading-7 {
    line-height: 1.75rem;
}
.mx-auto {
    margin-left: auto;
    margin-right: auto;
}
.ml-1 {
    margin-left: 0.25rem;
}
.mt-2 {
    margin-top: 0.5rem;
}
.mr-2 {
    margin-right: 0.5rem;
}
.ml-2 {
    margin-left: 0.5rem;
}
.mt-4 {
    margin-top: 1rem;
}
.ml-4 {
    margin-left: 1rem;
}
.mt-8 {
    margin-top: 2rem;
}
.ml-12 {
    margin-left: 3rem;
}
.-mt-px {
    margin-top: -1px;
}
.max-w-6xl {
    max-width: 72rem;
}
.min-h-screen {
    min-height: 100vh;
}
.overflow-hidden {
    overflow: hidden;
}
.p-6 {
    padding: 1.5rem;
}
.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.pt-8 {
    padding-top: 2rem;
}
.fixed {
    position: fixed;
}
.relative {
    position: relative;
}
.top-0 {
    top: 0;
}
.right-0 {
    right: 0;
}
.shadow {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}
.text-center {
    text-align: center;
}
.text-gray-200 {
    --text-opacity: 1;
    color: #edf2f7;
    color: rgba(237, 242, 247, var(--text-opacity));
}
.text-gray-300 {
    --text-opacity: 1;
    color: #e2e8f0;
    color: rgba(226, 232, 240, var(--text-opacity));
}
.text-gray-400 {
    --text-opacity: 1;
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--text-opacity));
}
.text-gray-500 {
    --text-opacity: 1;
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--text-opacity));
}
.text-gray-600 {
    --text-opacity: 1;
    color: #718096;
    color: rgba(113, 128, 150, var(--text-opacity));
}
.text-gray-700 {
    --text-opacity: 1;
    color: #4a5568;
    color: rgba(74, 85, 104, var(--text-opacity));
}
.text-gray-900 {
    --text-opacity: 1;
    color: #1a202c;
    color: rgba(26, 32, 44, var(--text-opacity));
}
.underline {
    text-decoration: underline;
}
.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.w-5 {
    width: 1.25rem;
}
.w-8 {
    width: 2rem;
}
.w-auto {
    width: auto;
}
.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}
@media (min-width: 640px) {
    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }
    .sm\:block {
        display: block;
    }
    .sm\:items-center {
        align-items: center;
    }
    .sm\:justify-start {
        justify-content: flex-start;
    }
    .sm\:justify-between {
        justify-content: space-between;
    }
    .sm\:h-20 {
        height: 5rem;
    }
    .sm\:ml-0 {
        margin-left: 0;
    }
    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .sm\:pt-0 {
        padding-top: 0;
    }
    .sm\:text-left {
        text-align: left;
    }
    .sm\:text-right {
        text-align: right;
    }
}
@media (min-width: 768px) {
    .md\:border-t-0 {
        border-top-width: 0;
    }
    .md\:border-l {
        border-left-width: 1px;
    }
    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
@media (min-width: 1024px) {
    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity));
    }
    .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity));
    }
    .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity));
    }
    .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity));
    }
    .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity));
    }
    .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: #6b7280;
        color: rgba(107, 114, 128, var(--tw-text-opacity));
    }
}
</style>
