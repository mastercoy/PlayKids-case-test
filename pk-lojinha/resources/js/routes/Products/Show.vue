<template>
    <section class="text-gray-700 body-font overflow-hidden" v-if="product">
        <div class="container px-12 py-24 mx-auto">
            <div class="lg:w-1/3 mx-auto flex flex-wrap">
                <!--                fixme buscar na src o product.image-->
                <img alt="ecommerce image" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/320x320">
                <div class="lg:w-2/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2
                        class="text-sm title-font text-gray-500 tracking-widest uppercase inline-block mr-4"
                        v-for="category in product.categories"
                        v-text="category.name"
                    ></h2>
                    <h1
                        class="text-gray-900 text-3xl title-font font-medium mb-2"
                        v-text="product.name"
                    ></h1>
                    <p
                        class="leading-relaxed"
                        v-text="product.description"
                    ></p>
                    <div class="flex mt-6 pt-4 border-t-2 border-gray-200">
                        <span
                            class="title-font font-medium t ext-2xl text-gray-900"
                            v-text="formatCurrency(product.price)"
                        ></span>
                        <button
                            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                            @click="$store.commit('addToCart', product)"
                        >Adicionar ao carrinho
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    methods: {
        formatCurrency(price) {
            price = (price / 100);
            return price.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
        }
    },
    computed: {
        products() {
            return this.$store.state.products;
        },
        product() {
            return this.products.find(product => product.slug === this.$route.params.slug);
        }
    }
}
</script>

<style scoped>

</style>
