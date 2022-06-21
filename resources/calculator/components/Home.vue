<template>
    <div>
        <form v-on:submit.prevent>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div v-if="isActiveTab(1)">
                                <ServiceSelection
                                    :pricingTypes="pricingTypes"
                                    :services="services"
                                    :levels="levels"
                                    :data="data"
                                    :urgencies="urgencies"
                                    :guarantees="guarantees"
                                    :spacings="spacings"
                                    :user_id="user_id"
                                    :subjects="subjects"
                                    :restricted_order_page_url="
                                        restricted_order_page_url
                                    "
                                    :create_account_url="create_account_url"
                                    :additional_services_by_service_id_url="
                                        additional_services_by_service_id_url
                                    "
                                    :sub_categories_by_service_id="
                                        sub_categories_by_service_id
                                    "
                                    @changeTab="changeTab($event)"
                                    @dataChanged="
                                        handleServiceSelection($event)
                                    "
                                ></ServiceSelection>
                                <Instruction
                                    :data="data"
                                    :errors="errors"
                                    :term_and_condition_url="
                                        term_and_condition_url
                                    "
                                    :privacy_policy_url="privacy_policy_url"
                                    :upload_attachment_url="
                                        upload_attachment_url
                                    "
                                    :total="total"
                                    @changeTab="changeTab($event)"
                                    @submitRequest="handleSubmit($event)"
                                ></Instruction>
                                <OrderSummary
                                    :form="dataForOrderSummary"
                                    @dataChanged="handleCalculatedData($event)"
                                    @totalChanged="handleTotalChanged($event)"
                                ></OrderSummary>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <OrderSummary
                        :form="dataForOrderSummary"
                        @dataChanged="handleCalculatedData($event)"
                    ></OrderSummary>
                </div> -->
            </div>
        </form>
    </div>
</template>

<script>
import ServiceSelection from "./home/ServiceSelection.vue";
import Instruction from "./home/Instruction.vue";
import OrderSummary from "./home/OrderSummary.vue";

export default {
    components: {
        ServiceSelection,
        Instruction,
        OrderSummary
    },

    props: {
        services: {
            default: {}
        },
        subjects: {
            default: {}
        },
        levels: {
            type: Array,
            default() {
                return {};
            }
        },
        urgencies: {
            type: Array,
            default() {
                return {};
            }
        },
        guarantees: {
            type: Array,
            default() {
                return {};
            }
        },
        spacings: {
            type: Array,
            default() {
                return {};
            }
        },
        user_id: {
            type: [Boolean, Number],
            default() {
                return null;
            }
        },
        restricted_order_page_url: {
            type: String,
            default() {
                return null;
            }
        },
        upload_attachment_url: {
            type: String,
            default() {
                return null;
            }
        },
        create_account_url: {
            type: String,
            default() {
                return null;
            }
        },
        additional_services_by_service_id_url: {
            type: String,
            default() {
                return null;
            }
        },
        sub_categories_by_service_id: {
            type: String,
            default() {
                return null;
            }
        },
        add_to_cart_url: {
            type: String,
            default() {
                return null;
            }
        },
        term_and_condition_url: {
            type: String,
            default() {
                return null;
            }
        },
        privacy_policy_url: {
            type: String,
            default() {
                return null;
            }
        }
    },

    data() {
        return {
            pricingTypes: {
                fixed: 1,
                perWord: 2,
                perPage: 3,
                PerSlide: 4
            },
            data: {
                subject: this.subjects ? this.subjects[0] : {}
            },
            activeTab: 1,
            form: {},
            dataForOrderSummary: {},
            total: 0,
            errors: {}
        };
    },
    methods: {
        handleServiceSelection($data) {
            this.dataForOrderSummary = $data;
        },
        handleTotalChanged($total) {
            this.total = $total;
        },
        handleCalculatedData($calculatedData) {
            this.form = $calculatedData;
        },
        handleSubmit($data) {
            var mergedRecords = { ...this.form, ...$data, ...this.data };
            this.submitForm(mergedRecords);
        },
        changeTab(tabNumber) {
            if (tabNumber == 2 && !this.user_id) {
                window.location = this.restricted_order_page_url;
                return false;
            }
            this.activeTab = tabNumber;
            this.$nextTick(() => {
                window.scrollTo(0, 0);
            });
        },
        isActiveTab: function(tab) {
            return this.activeTab == tab;
        },

        submitForm(formRecords) {
            this.errors = [];
            var $scope = this;
            axios
                .post(this.add_to_cart_url, formRecords)
                .then(function(response) {
                    if (response.data.redirect_url) {
                        window.location.href = response.data.redirect_url;
                    } else if (response.data.errors) {
                        $scope.errors = response.data.errors;
                    } else {
                        alert("Something went wrong");
                    }
                })
                .catch(function(error) {
                    console.log(error);
                    alert("Something went wrongs");
                });
        }
    }
};
</script>
