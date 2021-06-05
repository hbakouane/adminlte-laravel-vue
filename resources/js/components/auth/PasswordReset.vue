<template>
    <div class="register-page">
        <div class="register-box">
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Reset your password</p>

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

                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary btn-block" @click="validate($event)">Reset password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <a href="/login" class="text-center">Login</a> <br/>
                    <a href="/register" class="text-center">Register</a>
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
    name: "PasswordReset",
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
                _token: this.token
            }
            // Empty the errors
            this.errors.email = null
            axios.post('/password/email', user)
            .then(res => {
                console.log(res)
                this.loading = false
                this.success = true
                this.message = res.data.message
                this.failure = false
            })
            .catch(err => {
                this.loading = false
                this.failure = true
                // Show the error message
                this.message = err.response.data.message
                this.errors.email = err.response.data.errors.email ? err.response.data.errors.email[0] : null
                this.success = false
            })
        }
    }
}
</script>
