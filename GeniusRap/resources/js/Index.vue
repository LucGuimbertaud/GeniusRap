<template>
    <div>
        <div
            class="navbar navbar-expand-sm navbar-light"
            style="background-color: #ffff64"
        >
            <router-link v-bind:to="{ name: 'home' }">
                <a class="navbar-brand font-weight-bolder">Génius Rap</a>
            </router-link>

            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class=" navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <router-link v-bind:to="{ name: 'tracks' }">
                        <a class="nav-link">Musiques</a>
                    </router-link>
                </div>
            </div>
            <form class="form-inline">
                <input
                    class="form-control mr-md-2"
                    type="search"
                    placeholder="Rechercher"
                    aria-label="Search"
                    v-model="query"
                />
                <ul v-if="results.length > 0 && query">
                    <li v-for="result in results.slice(0, 10)" :key="result.id">
                        <a :href="result.url">
                            <div v-text="result"></div>
                        </a>
                    </li>
                </ul>
            </form>
        </div>

        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            query: null,
            results: []
        };
    },
    watch: {
        query(after, before) {
            this.searchMembers();
        }
    },
    methods: {
        searchMembers() {
            axios
                .get("api/artist/search", { params: { query: this.query } })
                .then(response => (this.results = response.data))
                .catch(error => {});
        }
    }
};
</script>
