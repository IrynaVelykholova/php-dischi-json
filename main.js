"use script"

Vue.createApp({
    data() {
        return {
        albums: []
        }
    },
    mounted() {
        axios.get("api/albums.php").then((response) => {
        this.albums = response.data;
        })
    }
}).mount("#app");