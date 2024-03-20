const { createApp } = Vue;

createApp({
    data() {
        return {
            diskList: [],
            selectedDisk: [],
            showOverlay: false,
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            this.diskList = res.data;
        })
    },

    methods: {
        showDiskDetails(discIndex) {
            axios.get('./server.php').then(res => {
                this.selectedDisk = res.data[discIndex];
                this.showOverlay = true;
                console.log(this.selectedDisk)
            });
        },

        closeOverlay() {
            this.showOverlay = false;
        },
    }

}).mount('#app');
