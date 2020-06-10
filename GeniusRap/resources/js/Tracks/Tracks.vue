<template>
    <div>
        <ul class="list-group list-group-flush w-75 m-auto">
            <h3 class="mt-5">Top Musiques COMPLETE</h3>

            <li
                v-for="track in tracks"
                :key="track.id"
                class="list-group-item list-group-item-action justify-content-between align-items-center"
            >
                {{ track["title"] }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tracks: null
        };
    },

    created() {
        const request = axios.get("api/tracks").then(response => {
            this.tracks = response.data;
        });
    }
};
</script>
