const app = new Vue({
    title:'PHP api',
    el:'#app',

    data: {
        products:[],
    },

    methods: {
        fetchProducts(){
            axios
            .get("./products.php")
            .then((res)=> {
                console.log(res)
                const {response} = res.data
                this.products = response
            })
        },
    },
    created(){
        this.fetchProducts();
    }
});