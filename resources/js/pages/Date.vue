<script>
export default {
    name: "Date",
};
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Concerti</h1>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Luogo</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>22/05/2021</td>
                    <td>Napoli</td>
                    <td>Kestè</td>
                </tr>
                <tr>
                    <td>10/12/2030</td>
                    <td>Milano</td>
                    <td>Arena</td>
                </tr>
                <tr>
                    <td>12/12/12</td>
                    <td>Roma</td>
                    <td>COLOSSEO</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    color: white;
    height: 100vh;
    background-image: url('../assets/bianco.JPG');
    background-size: cover;
}
</style>