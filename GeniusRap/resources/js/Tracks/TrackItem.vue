<template>
    <router-link
        :to="{ name: 'track', params: { id } }"
        tag="li"
        class="list-group-item list-group-item-action justify-content-between align-items-center"
        style="cursor: pointer"
    >
        {{ title }}
    </router-link>
</template>

<script>
export default {
    props: {
        title: String,
        id: Number
    }
};
</script>
