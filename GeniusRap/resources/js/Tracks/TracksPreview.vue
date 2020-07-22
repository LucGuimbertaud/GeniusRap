<template>
    <div>
        <div v-if="loading">
            <p class=" text-center mt-5">Loading..</p>
        </div>
        <div v-else style="width: 65%" class=" m-auto">
            <ul class="list-group list-group-flush m-auto">
                <h3 class="mt-5">Top Musiques</h3>
                <track-item
                    v-bind="track"
                    v-for="track in tracks"
                    :key="track.id"
                ></track-item>
            </ul>
        </div>
    </div>
</template>

<script>
import TrackItem from "./TrackItem";

export default {
    components: {
        TrackItem
    },

    data() {
        return {
            tracks: null,
            loading: false
        };
    },

    created() {
        this.loading = true;
        const request = axios.get("api/top-tracks").then(response => {
            this.tracks = response.data;
            this.loading = false;
        });
    }
};
</script>
