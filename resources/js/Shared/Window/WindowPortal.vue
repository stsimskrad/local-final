<template>
    <div>
        <vue-pdf-embed v-if="show" :source="currentUrl+'/storage/'+attachment">
            <template slot="loading">
                loading content here...
            </template>
        </vue-pdf-embed>
    </div>
</template>

<script>
    import VuePdfEmbed from 'vue-pdf-embed'
    function copyStyles(sourceDoc, targetDoc) {
        Array.from(sourceDoc.styleSheets).forEach(styleSheet => {
            if (styleSheet.cssRules) {
                // for <style> elements
                const newStyleEl = sourceDoc.createElement("style");

                Array.from(styleSheet.cssRules).forEach(cssRule => {
                    // write the text of each rule into the body of the style element
                    newStyleEl.appendChild(sourceDoc.createTextNode(cssRule.cssText));
                });

                targetDoc.head.appendChild(newStyleEl);
            } else if (styleSheet.href) {
                // for <link> elements loading CSS from a URL
                const newLinkEl = sourceDoc.createElement("link");

                newLinkEl.rel = "stylesheet";
                newLinkEl.href = styleSheet.href;
                targetDoc.head.appendChild(newLinkEl);
            }
        });
    }

    export default {
        components: {
            VuePdfEmbed
        },
        name: 'window-portal',
        model: {
            prop: 'open',
            event: 'close'
        },
        data() {
            return {
                windowRef: null,
                currentUrl: window.location.origin,
                attachment: '',
                show: false
            }
        },
        watch: {
            open(newOpen) {
                if (newOpen) {
                    this.openPortal();
                } else {
                    this.closePortal();
                }
            }
        },
        methods: {
            set(data) {
                this.attachment = data;
                this.show = true;
                this.openPortal();
            },
            openPortal() {
                this.windowRef = window.open("", "", "width=800,height=400,left=200,top=200");
                this.windowRef.document.body.appendChild(this.$el);
                copyStyles(window.document, this.windowRef.document);
                this.windowRef.addEventListener('beforeunload', this.closePortal);
            },
            closePortal() {
                if (this.windowRef) {
                    this.windowRef.close();
                    this.windowRef = null;
                    this.$emit('close');
                }
            }
        },
        mounted() {
            if (this.open) {
                this.openPortal();
            }
        },
        beforeDestroy() {
            if (this.windowRef) {
                this.closePortal();
            }
        }
    }

</script>
