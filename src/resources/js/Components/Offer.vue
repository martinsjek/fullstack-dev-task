<template>
    <section class="offer">
        <div class="container">
            <h2>Īpašs piedāvājums tikai piektdien!</h2>
            <div class="offer-block">
                <div class="offer-block-left">
                    <p class="offer-block-title">LMT Viedtelevīzija + HBO filmas un seriāli</p>
                    <img width="223" height="147" v-lazy="`/images/device.png`" alt="">
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
                        <Button tag="a" type="secondary" text="Vairāk"/>
                    </div>
                </div>
                <div class="media">
                    <img src="#" v-lazy="item" width="141" height="200" alt="" v-for="(item) in media" :key="item">
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
    '/images/offer-media-1.png',
    '/images/offer-media-2.png',
    '/images/offer-media-3.png',
    '/images/offer-media-4.png'
]
</script>

<style lang="scss">
@import "../../scss/base/colors";

.offer {
    padding-bottom: 60px;
    @media (min-width: 992px) {
        padding-bottom: 93px;
    }

    h2 {
        color: $white;
        margin-bottom: 40px;
        text-align: center;
        @media (min-width: 992px) {
            text-align: left;
        }
    }

    .offer-block {
        padding: 20px 20px 30px 20px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        background: rgba($gray, 0.5);
        border-radius: 5px;
        @media (min-width: 992px) {
            padding: 35px 79px 41px 80px;
        }

        &-left {
            width: 100%;
            @media (min-width: 992px) {
                width: 30%;
            }

            img {
                margin: 0 auto;
            }
        }

        &-title {
            text-align: center;
            margin-bottom: 8px;
            font-weight: 700;
            font-size: 2.6rem;
            line-height: 1.2;
        }
    }

    .offer-block-bottom {
        display: flex;
        align-items: flex-end;
        justify-content: center;
        margin-top: 12px;
    }

    .price-wrap {
        margin-right: 32px;
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
            font-weight: 700;
        }

        .cents {
            font-size: 3.2rem;
            padding-top: 6px;
        }

        .description {
            font-size: 1.6rem;
        }
    }

    .btn {
        margin-bottom: 6px;
    }

    .media {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
        margin-top: 40px;
        width: 100%;
        @media (min-width: 992px) {
            width: 70%;
            padding-left: 90px;
            grid-gap: 12px;
            margin-top: 0;
        }
        @media (min-width: 1080px) {
            grid-template-columns: repeat(4, 1fr);
        }

        img {
            border-radius: 5px;
            width: 100%;

            &:last-child {
                display: none;
                @media (min-width: 1080px) {
                    display: block;
                }
            }
        }
    }

    .notice {
        display: none;
        @media (min-width: 992px) {
            display: block;
            margin-top: 40px;
            color: $lighter-gray;
            opacity: 0.5;
        }
    }
}
</style>
