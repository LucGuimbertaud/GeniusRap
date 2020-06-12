<template>
    <div>
        <router-link :to="{name: 'track', params : {id}}">
            {{ title }}
        </router-link>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        id: Number
    }
};
</script>
