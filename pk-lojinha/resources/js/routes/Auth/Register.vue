<template>
    <body class="font-mono bg-gray-400">
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <div
                        class="w-full h-auto bg-white hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url('https://i.imgur.com/uvBPjMu.png')"
                    ></div>

                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Admin, crie sua conta!</h3>
                        <form
                            ref="form"
                            class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                            @submit.prevent="create"
                        >
                            <div class="mb-4">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                                        Nome
                                    </label>
                                    <input
                                        v-model="data.name"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        placeholder="Nome"
                                    />
                                </div>
                            </div>
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    Email
                                </label>
                                <input
                                    v-model="data.email"
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email"
                                    type="email"
                                    placeholder="Email"
                                />
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        Senha
                                    </label>
                                    <input
                                        v-model="data.password"
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password"
                                        type="password"
                                        placeholder="******"
                                    />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password_confirmation">
                                        Confirme sua senha
                                    </label>
                                    <!--                                    Todo futura confirmação de senha-->
                                    <input
                                        v-model="data.password_confirmation"
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password_confirmation"
                                        type="password"
                                        placeholder="******"
                                    />
                                </div>
                            </div>
                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                    Registre sua conta
                                </button>
                            </div>
                            <hr class="mb-6 border-t"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</template>

<script>
export default {
    data: () => ({
        data: {
            name: "",
            email: "",
            password: ""
        }
    }),
    methods: {
        create() {
            let data = {
                name: this.data.name,
                email: this.data.email,
                password: this.data.password,
            };
            axios.post(`http://localhost:8888/api/register-user`, data)
                .then((response) => {
                    alert('Usuário criado com sucesso!');
                    this.$router.push('/login');

                })
                .catch(error => {
                        console.log('Something bad happened!')
                        console.log(error)
                    }
                );
        }
    },

    computed: {}
}
</script>

<style scoped>

</style>
