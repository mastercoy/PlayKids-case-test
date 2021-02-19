<template>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço de E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>
    </section>


</template>

<script>
export default {
    methods: {
        // Todo apos submeter, redirecionar
        submit() {

        }


    },

    computed: {}
}
</script>

<style scoped>

</style>
