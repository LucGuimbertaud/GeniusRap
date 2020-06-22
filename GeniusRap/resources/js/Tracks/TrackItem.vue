<template>
    <span v-if="loading"></span>
    <router-link
        v-else
        :to="{ name: 'track', params: { id } }"
        tag="li"
        class="list-group-item list-group-item-action justify-content-between align-items-center"
        style="cursor: pointer"
    >
        {{ title }}
        {{ artist.name }}
    </router-link>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            artist: null
        };
    },

    props: {
        title: String,
        artist_id: Number,
        release_date: String,
        id: Number
    },

    created() {
        this.loading = true;
        const request_artist = axios
            .get(`/api/artist/${this.artist_id}`)
            .then(response => {
                this.artist = response.data;
                this.loading = false;
            });
    }
};
</script>
