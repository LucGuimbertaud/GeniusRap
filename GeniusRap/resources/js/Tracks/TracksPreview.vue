<template>
    <div>
        <ul class="list-group list-group-flush w-75 m-auto">
            <h3 class="mt-5">Top Musiques</h3>
            <li
                v-for="track in tracks"
                :key="track.id"
                class="list-group-item list-group-item-action justify-content-between align-items-center"
            >
                <track-item v-bind="track"></track-item>
            </li>
        </ul>
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
    },
};
</script>
