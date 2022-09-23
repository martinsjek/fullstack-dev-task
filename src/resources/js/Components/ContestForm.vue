<template>
    <section class="contest-form">
        <div class="container">
            <h2>Pieteikties konkursam!</h2>
            <form action="" @submit.prevent="submitForm">
                <div class="input-wrap">
                    <label for="name">Vārds, uzvārds</label>
                    <input type="text" id="name" placeholder="Jānis Bērziņš" v-model.trim="name">
                    <p class="errors" v-if="errors && errors.name">
                        <span v-for="(item) in errors.name" :key="item">{{ item }}</span>
                    </p>
                </div>
                <div class="input-wrap">
                    <label for="email">E-pasta adreses</label>
                    <input type="email" id="email" placeholder="janis.berzins@gmail.com" v-model.trim="email">
                    <p class="errors" v-if="errors && errors.email">
                        <span v-for="(item) in errors.email" :key="item">{{ item }}</span>
                    </p>
                </div>
                <Button tag="button" type="primary" text="Nosūtīt"/>
            </form>
            <p class="success-message" v-if="successMessage">{{ successMessage }}</p>
        </div>
    </section>
</template>

<script setup lang="ts">
import Button from '../Partials/Button.vue'
import {ref} from "vue"
import axios from "axios"

const name = ref('')
const email = ref('')
const errors = ref()
const successMessage = ref('')

const submitForm = () => {
    errors.value = null
    successMessage.value = ''
    axios.post('/api/contest-submission', {
        name: name.value,
        email: email.value
    }).then((response) => {
        successMessage.value = response.data
    }).catch((error) => {
        if (error.response.status === 422) {
            if (error.response.data.errors) {
                errors.value = error.response.data.errors
            }
        }
    })
}
</script>

<style lang="scss">
@import "../../scss/base/colors";

.contest-form {
    background: $white;
    padding: 42px 0 80px 0;
    @media (min-width: 992px) {
        padding: 70px 0 164px 0;
    }

    h2 {
        margin-bottom: 40px;
        color: $gray;
        @media (min-width: 992px) {
            margin-bottom: 70px;
        }
    }

    form {
        display: flex;
        flex-direction: column;
        @media (min-width: 992px) {
            flex-direction: row;
            align-items: flex-end;
        }
    }

    .input-wrap {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 0 28px 0;
        position: relative;
        @media (min-width: 992px) {
            margin: 0 20px 0 0;
            max-width: 360px;
        }
    }

    label {
        margin-bottom: 0.8rem;
        font-size: 1.4rem;
        color: $color-input-label;
    }

    input {
        padding: 0 24px;
        height: 56px;
        background: $lighter-gray;
        border: 1px solid $color-input-border;
        border-radius: 5px;
        width: 100%;
        font-size: 1.6rem;
    }

    .btn {
        height: 56px;
        @media (min-width: 992px) {
            width: 144px;
        }
    }

    .errors {
        color: $red;
        position: absolute;
        bottom: -4px;
        left: 0;
        transform: translateY(100%);
        font-size: 1.4rem;
    }

    .success-message {
        color: green;
        margin-top: 10px;
    }
}
</style>
