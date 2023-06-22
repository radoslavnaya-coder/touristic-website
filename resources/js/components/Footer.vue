<template>
    <main class="footer footer-dark bg-black navbar">
        <div class="container py-5">
            <nav>
             <div class="mx-3">
                <router-link to="/aboutus">О нас</router-link><br>
                <router-link to="/supportingme">Поддержать проект</router-link>  
            </div>
            <div class="mx-3">
                <a href="">Поделиться</a><br>
                <router-link to="/login">Предложить место</router-link>
            </div>   
            </nav>
            <router-link to="/" class="footer__name nav-item">Welcome</router-link>
        </div>
    </main>
</template>

<script>
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
