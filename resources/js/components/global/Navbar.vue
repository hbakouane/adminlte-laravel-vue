<template>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/without/breadcrumbs" class="nav-link">Without breadcrumbs</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <button :disabled="disable" @click="logout()" class="btn btn-danger">Logout</button>
        </ul>
    </nav>
    <!-- /.navbar -->
</template>

<script>
import axios from 'axios'
import Errors from '../partials/Errors.vue'

export default {
    components: { Errors },
    name: "Navbar",
    data() {
        return {
            disable: false
        }
    },
    methods: {
        logout() {
            // Disable the logout button
            this.disable = true
            // Get the CSRF token
            let token = document.head.querySelector('meta[name="csrf-token"]').getAttribute('content')
            // Log the user out
            axios.post('/logout', token)
            .then(() => {
                console.log('logged out successfully')
                window.location.href = '/'
            })
            .catch(() => /* Enable the logout button */ this.disable = false)
        }
    }
}
</script>

<style>
    .logo {
        height: 45px;
        width: 250px;
    }
    .logo-mobile {
        height: 60px;
        width: 200px;
    }
    #form {
        background: white;
        padding: 25px;
        border-radius: 14px;
        border: 2px solid #14756a23;
    }
</style>
