<template>
    <section class="offer">
        <div class="container">
            <h2>Īpašs piedāvājums tikai piektdien!</h2>
            <div class="offer-block">
                <div class="offer-block-left">
                    <p class="offer-block-title">LMT Viedtelevīzija + HBO filmas un seriāli</p>
                    <img width="223" height="147" src="/images/device.png" alt="">
                    <div class="offer-block-bottom">
                        <div class="price-wrap">
                            <p class="old-price">Iepriekš {{ oldPrice }}€/mēn</p>
                            <div class="new-price">
                                <span class="big">{{ newPriceEuros }}</span>
                                <div class="small-wrap">
                                    <span class="cents">{{ newPriceCents }}</span>
                                    <span class="description">€/mēn.*</span>
                                </div>
                            </div>
                        </div>
                        <Button tag="a" type="primary" text="Vairāk"/>
                    </div>
                </div>
                <div class="media">
                    <img :src="item" width="141" height="200" alt="" v-for="(item) in media" :key="item">
                </div>
            </div>
            <p class="notice">Akcija 29.11.2019. Piedāvājums attiecas uz noteiktām preču kategorijām. Piedāvājums
                neattiecas uz citu akciju precēm.</p>
        </div>
    </section>
</template>

<script setup lang="ts">
import Button from '../Partials/Button.vue'

const oldPrice = '24,99'

const newPrice = '19,98'
const newPriceEuros = newPrice.split(',')[0]
const newPriceCents = newPrice.split(',')[1]

const media = [
    '/images/offer-media-1.jpg',
    '/images/offer-media-2.jpg',
    '/images/offer-media-3.jpg',
    '/images/offer-media-4.jpg'
]
</script>

<style lang="scss">
@import "../../scss/base/colors";

.offer {
    padding-bottom: 93px;

    h2 {
        color: $white;
        margin-bottom: 40px;
    }

    .offer-block {
        padding: 35px 79px 41px 69px;
        display: flex;
        align-items: center;
        background: rgba($gray, 0.5);
        border-radius: 5px;

        &-left {
            width: 30%;
            padding-right: 60px;
        }

        &-title {
            text-align: center;
            margin-bottom: 8px;
            font-weight: 700;
            font-size: 2.6rem;
        }
    }

    .offer-block-bottom {
        display: flex;
        align-items: center;
    }

    .price-wrap {
        margin-right: 20px;
    }

    .old-price {
        color: $light-gray;
        font-size: 1.6rem;
        margin-bottom: 10px;
    }

    .new-price {
        display: inline-flex;

        .big {
            font-size: 6.2rem;
        }

        .small-wrap {
            display: flex;
            flex-direction: column;
        }

        .cents {
            font-size: 3rem;
        }

        .description {
            font-size: 1.6rem;
        }
    }

    .media {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 12px;

        img {
            border-radius: 5px;
        }
    }

    .notice {
        margin-top: 26px;
        color: $lighter-gray;
        opacity: 0.5;
    }
}
</style>
