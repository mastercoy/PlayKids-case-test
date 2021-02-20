<template>
    <div class="w-full">
        <div class="lg:w-2/3 w-full mx-auto mt-8 overflow-auto">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">
                Muito obrigado pela sua compra!
            </h2>
        </div>
    </div>
</template>
<script>
export default {
    // futura integração com o stripe
    methods: {
        // cartLineTotal(item) {
        //     let amount = item.price * item.pivot.quantity;
        //     amount = (amount / 100);
        //     return amount.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
        // }
    },
    computed: {

        // order() {
        //     return this.$store.state.order;
        // },
        // orderQuantity() {
        //     return this.$store.state.order.products.reduce((acc, item) => acc + item.pivot.quantity, 0);
        // },
        // orderTotal() {
        //     let amount = this.$store.state.order.products.reduce((acc, item) => acc + (item.price * item.pivot.quantity), 0);
        //     amount = (amount / 100);
        //     return amount.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
        // }
    }
}
</script>
