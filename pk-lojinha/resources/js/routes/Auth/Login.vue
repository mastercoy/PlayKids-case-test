<template>
    <div class="min-h-screen flex justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img
                    class="mx-auto h-12 w-auto"
                    src="https://s3.amazonaws.com/playkids-blog-assets/wp-content/uploads/2020/07/10132345/logo-playkids.png"
                    alt="Workflow"
                >
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Login de administrador.
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Ou
                    <router-link class="mr-5 hover:text-gray-900" :to="{name: 'auth.register'}">
                        crie uma nova conta!
                    </router-link>
                </p>
            </div>
            <form
                ref="form"
                class="mt-8 space-y-6" action="#"
                @submit.prevent="login"
            >
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email-address" class="sr-only">Endereço de Email</label>
                        <input
                            v-model="data.email"
                            id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Endereço de e-mail">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Senha</label>
                        <input
                            v-model="data.password"
                            id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Senha">
                    </div>
                </div>
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium
                             rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">

                         <svg
                             class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true"
                         >
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                              clip-rule="evenodd"/>
                        </svg>
                      </span>
                        Logar-se
                    </button>
                </div>
            </form>
        </div>
    </div>


</template>

<script>
export default {
    data: () => ({
        errors: [],
        data: {
            email: "",
            password: "",
        }
    }),

    methods: {
        login() {
            let data = {
                email: this.data.email,
                password: this.data.password,
            };
            console.log('objeto data', data);

            axios.post(`http://localhost:8888/api/login`, data)
                .then((response) => {
                    console.log('response do backend', response.data);
                    this.$router.push('/admin-area'); // redireciona
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
