<template>
    <div class="register-page">
        <div class="register-box">
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Welcome Back</p>

                    <errors :success="success" :failure="failure" :message="message" :loading="loading" />
                    <form method="post" ref="form">
                        <div class="input-group">
                            <input type="email" class="form-control" v-model="email" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <p class="small text-danger mb-3" v-html="errors.email"></p>

                        <div class="input-group">
                            <input type="password" class="form-control" v-model="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <p class="small text-danger mb-3" v-html="errors.password"></p>

                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary btn-block" @click="validate($event)">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <a href="/register" class="text-center">Don't have an account?</a> <br/>
                    <a href="/password/reset" class="text-center">Forgot your password?</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import Errors from '../partials/Errors.vue'

export default {
    components: { Errors },
    name: "Login",
    data() {
        return {
            name: '',
            email: '',
            username: '',
            password: '',
            password_confirmation: '',
            success: false,
            failure: false,
            message: '',
            token: document.head.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            loading: false,
            errors: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        validate(event) {
            event.preventDefault()
            // Show the loading alert
            this.loading = true
            this.failure = false
            this.success = false
            
            // Register the user
            let user = {
                email: this.email,
                password: this.password,
                _token: this.token
            }
            // Empty the errors
            this.errors.email = null
            this.errors.password = null
            axios.post('/login', user)
            .then(res => {
                this.loading = false
                this.success = true
                this.message = "Successfully Logged in."
                this.failure = false

                setTimeout(() => {
                    window.location.href = '/home'
                }, 1000)
            })
            .catch(err => {
                console.log(err.response)
                this.loading = false
                this.failure = true
                // Show the error message
                this.message = err.response.data.message
                this.errors.email = err.response.data.errors.email ? err.response.data.errors.email[0] : null
                this.errors.username = err.response.data.errors.username ? err.response.data.errors.username[0] : null
                this.success = false
            })
        }
    }
}
</script>
