const { createApp } = Vue;

createApp({
    data() {
        return {
            diskList: [],

        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            this.diskList = res.data;
            console.log(this.diskList)
        })
    },

}).mount('#app');
