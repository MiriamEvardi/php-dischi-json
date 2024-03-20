const { createApp } = Vue;

createApp({
    data() {
        return {
            diskList: [],
            selectedDisk: {},
            showOverlay: false,

        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            this.diskList = res.data;
            console.log(this.diskList)
        })
    },

    methods: {
        showDiskDetails(index) {
            axios.get('./server.php?discIndex=' + index).then(res => {
                this.selectedDisk = res.data[index];
                this.showOverlay = true;
            });
        },

        closeOverlay() {
            this.showOverlay = false;
        },
    }

}).mount('#app');
