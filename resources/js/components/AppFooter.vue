<script>
export default {
    name: 'AppFooter',

}
</script>

<template>
    <footer class="bg-dark text-light py-3 d-flex">
        <h6>Alfredo Pumilia ©</h6>
        <a class="login text-light" href="http://">Accedi</a>
    </footer>
</template>

<style lang="scss" scoped>
footer {
    justify-content: space-between;
    align-items: center;
    padding: 0 23px
}



.login {
    text-decoration: none;
    color: black;
    cursor: pointer;

}
</style>