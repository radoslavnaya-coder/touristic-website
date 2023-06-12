<template>
    <main class="footer footer-dark bg-black navbar">
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
    </main>
</template>

<script>
export default {
    name: 'Footer'
}
</script>
<style scoped>
footer *{
    color: white;
}
nav{
    display: inline-flex;
}
.footer__name{
    text-align: right;
    font-family: 'Italiana';
    font-size: 40px;
}
</style>
