<template>
    <div>
        <div
            class="navbar navbar-expand-sm navbar-light"
            style="background-color: #ffff64"
        >
            <router-link to="/">
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
                    <router-link to="/tracks">
                        <a class="nav-link">Musiques</a>
                    </router-link>
                    <a class="nav-link">Artistes</a>
                    <a class="nav-link">Album</a>
                </div>
            </div>
            <form class="form-inline">
                <input
                    class="form-control mr-md-2"
                    type="search"
                    placeholder="Rechercher"
                    aria-label="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    Rechercher
                </button>
            </form>
        </div>

        <div>
            <router-view></router-view>
        </div>
    </div>
</template>
