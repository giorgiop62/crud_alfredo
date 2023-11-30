<script>
export default {
    name: "Contact",
};
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Contatti</h1>
        <div class="left-box d-flex">
            <img src="../assets/06_Alfredo e Vincenzo.jpg" alt="Alfredo Pumilia">
            <div class="contatti">
                <ul>
                    <li><i class="fa-solid fa-house"></i>Napoli</li>
                    <li><a href="+393929220639"><i class="fa-solid fa-phone"></i>+39 3929220639</a></li>
                    <li><a href="alfredopumilia@gmail.com"><i class="fa-solid fa-envelope"></i>alfredopumilia@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    background-color: black;
    color: white;
}

img {
    width: 700px;
    filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    filter: gray;
}

.left-box {
    padding: 20px;
}

.contatti {
    font-size: 30px;
    margin-left: 20px;
    font-family: 'Times New Roman', Times, serif;
}

ul {
    list-style-type: none;
}

li {
    margin: 40px;
}

i {
    margin-right: 30px;
}

a {
    color: white;
    text-decoration: none;
}
</style>