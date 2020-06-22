<template>
    <router-link
        :to="{ name: 'track', params: { id } }"
        tag="li"
        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
        style="cursor: pointer"
    >
        <p>{{ title }}</p>
        <p>{{ name }}</p>
    </router-link>
</template>

<script>
export default {
    props: {
        title: String,
        artist_id: Number,
        release_date: String,
        id: Number,
        name: String,
    },
};
</script>
