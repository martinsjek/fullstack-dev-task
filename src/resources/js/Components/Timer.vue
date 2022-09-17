<template>
    <section class="timer">
        <vue-countdown :time="timeLeft"
                       :transform="transformSlotProps"
                       v-slot="{ days, hours, minutes, seconds }"
                       class="timer-wrap"
                       v-if="timeLeft">
            <div class="time-block days">
                <p class="number">{{ days }}</p>
                <p class="description">dienas</p>
            </div>
            <div class="clock">
                <div class="time-block">
                    <p class="number">{{ hours }}</p>
                    <p class="description">stundas</p>
                </div>
                <div class="time-block">
                    <p class="number">{{ minutes }}</p>
                    <p class="description">minūtes</p>
                </div>
                <div class="time-block">
                    <p class="number">{{ seconds }}</p>
                    <p class="description">sekundes</p>
                </div>
            </div>
        </vue-countdown>
    </section>
</template>

<script setup lang="ts">
const today = new Date()
const startingDateTime = '2022-09-16 21:30'
const startingDatePlusTwentyDays = new Date(startingDateTime)
startingDatePlusTwentyDays.setDate(startingDatePlusTwentyDays.getDate() + 20)

const startingDatePlusTwentyDaysTime = startingDatePlusTwentyDays.getTime()
const todayTime = today.getTime()

const timeLeft = Math.floor(startingDatePlusTwentyDaysTime - todayTime)

const transformSlotProps = (props: { days: number, hours: number, minutes: number, seconds: number }) => {
    const formattedProps: { [key: string]: string | number } = {}

    Object.entries(props).forEach(([key, value]) => {
        formattedProps[key] = value < 10 ? `0${value}` : value
    })

    return formattedProps
}
</script>

<style lang="scss">
@import "../../scss/base/colors";

.timer {
    padding: 44px 0 36px 0;
    @media (min-width: 992px) {
        padding: 54px 0;
    }

    .timer-wrap, .clock {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .time-block {
        width: 58px;
        text-align: center;
        @media (min-width: 992px) {
            text-align: left;
        }

        &.days {
            color: $red;
        }

        &:not(:last-child) {
            margin-right: calc((100vw - 58px * 4) / 4);
            @media (min-width: 375px) {
                margin-right: 38px;
            }
            @media (min-width: 992px) {
                margin-right: 88px;
            }
        }

        &:not(:first-child) {
            position: relative;

            &:before {
                content: ':';
                font-size: 3rem;
                position: absolute;
                top: -3px;
                left: -5vw;
                font-weight: 700;
                @media (min-width: 375px) {
                    left: -23px;
                }
                @media (min-width: 992px) {
                    font-size: 4rem;
                    top: -4px;
                    left: -46px;
                }
            }
        }
    }

    .number {
        font-size: 4rem;
        line-height: 0.8;
        font-weight: 700;
        @media (min-width: 992px) {
            font-size: 5rem;
        }
    }

    .description {
        font-size: 1.4rem;
        margin-top: 4px;
        @media (min-width: 992px) {
            margin-top: 8px;
        }
    }
}
</style>
