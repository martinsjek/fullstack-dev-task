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
    padding: 54px 0 76px 0;

    .timer-wrap, .clock {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .time-block {
        width: 48px;

        &.days {
            color: $red;
        }

        &:not(:last-child) {
            margin-right: 88px;
        }

        &:not(:first-child) {
            position: relative;

            &:before {
                content: ':';
                font-size: 4rem;
                position: absolute;
                top: 0;
                left: -44px;
                font-weight: 700;
            }
        }
    }

    .number {
        font-size: 5rem;
        line-height: 0.8;
        font-weight: 700;
    }

    .description {
        font-size: 1.4rem;
        margin-top: 10px;
    }
}
</style>
