@if ($categories->count())

{!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.categories.before', ['product' => $product]) !!}

<accordian :title="'{{ __('admin::app.catalog.products.categories') }}'" :active="true">
    <div slot="body">

        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.categories.controls.before', ['product' => $product]) !!}

        <tree-view behavior="normal" value-field="id" name-field="categories" input-type="checkbox" items='@json($categories)' value='@json($product->categories->pluck("id"))' id-field="custom_fields" fallback-locale="{{ config('app.fallback_locale') }}"></tree-view>

        <div class="custom_fields_wrapper">
            <h2>Custom Fields</h2>
        </div>

        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.categories.controls.after', ['product' => $product]) !!}

    </div>
</accordian>

{!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.categories.after', ['product' => $product]) !!}

@endif

@push('scripts')
    <script>
        $(document).ready(function () {
            const product_category_fields = JSON.parse(`{!! $product_category_fields !!}`);

            $('.checkbox').on('click', function () {
                let category_id = $(this).find('input').prop('value');

                //if checked
                if ($(this).find('input').prop('checked')) {
                    if($(this).find('input').attr('id')) {
                        let custom_fields = JSON.parse($(this).find('input').prop('id'));

                        let start = `<div class="category_seperator_`+category_id+`">`
                        let end = `</div>`;

                        let custom_fields_string = ``;
                        custom_fields.forEach(function (item) {
                            //prep label
                            // let is_required = item.is_required === "Yes" ? 'required' : '';
                            let is_required = item.is_required === "Yes" ? '' : '';
                            // let label = '<label for="slug" class="'+ (is_required ? 'required' : '') +'">'+item.title+'</label>';
                            let label = '<label for="slug" class="'+ (is_required ? '' : '') +'">'+item.title+'</label>';
                            let bare_field = ``;

                            //prep field
                            if (item.type == "Text" || item.type == "Selection" || item.type == "Number") {
                                bare_field = `<input type="text" v-validate="'required'" class="control" value="" name="custom_fields[${category_id}][${item.name}]" `+is_required+`/>`;
                            }
                            // else if (item.type == "Selection") {
                            //     let raw_options = item.selection_options.split(', ');
                            //     let final_options = ``;
                            //     raw_options.forEach(function (item) {
                            //         final_options += `<option value="`+item+`">`+item+`</option>`;
                            //     });
                            //     bare_field = `<select id="" v-validate="'required'" class="control custom_fields_types" name="custom_fields[${category_id}][${item.name}]" `+is_required+`>
                            //                             `+final_options+`
                            //                         </select>`;
                            // }
                            // else if (item.type == "Number") {
                            //     bare_field = `<input type="number" v-validate="'required'" class="control" step="0.001" value="" name="custom_fields[${category_id}][${item.name}]" `+is_required+`/>`;
                            // }
                            else if (item.type == "Textarea") {
                                bare_field = `<textarea v-validate="'required'" class="control" name="custom_fields[${category_id}][${item.name}]" cols="30" rows="10" `+is_required+`></textarea>`;
                            }

                            if (bare_field !== ``) {
                                custom_fields_string += `<div class="col-md-6">
                                                                <div class="control-group">
                                                                    `+label + bare_field+`
                                                                </div>
                                                            </div>`;
                            }
                        });

                        $('.custom_fields_wrapper').append(start + custom_fields_string + end);
                    }

                } else {
                    $('.category_seperator_' + category_id).remove();
                }
            });

            $('.checkbox').each(function () {
                $(this).trigger('click');
            });

            for (const productCategoryField of product_category_fields) {
                const name = `[name='custom_fields[${productCategoryField.category_id}][${productCategoryField.field_name}]']`
                const item = $(name)
                item.val(productCategoryField.field_value)
            }

            //sanitize
            $('input').on('input', function() {
                let inputValue = $(this).val();
                let outputValue = inputValue.replace(/"/g, "''");
                $(this).val(outputValue);
            });
        });
    </script>
@endpush