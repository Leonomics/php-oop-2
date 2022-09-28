const app = new Vue({
    title:'PHP api',
    el:'#app',

    data: {
        products:[],
        order:[]
    },

    methods: {
        fetchProducts(){
            axios
            .get("./API/products.php")
            .then((res)=> {
                console.log(res)
                const {response} = res.data
                this.products = response
            })

            axios
            .get("./API/order.php")
            .then((res)=> {
                console.log(res)
                const {response} = res.data
                this.order = response
            })
        },
    },
    created(){
        this.fetchProducts();
    }
});