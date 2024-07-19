<h4 class="section-title">{{ trans('fields.section_religion') }}</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="religion_id">{{ trans('fields.religion') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="religion_id" id="religion_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto"
                    onchange="dependencyDropDown($parent_id='religion_id',$child_id='caste_id',$data_id='religion-id')">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['religions'])
                        @foreach ($record['religions'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('religion_id') ?? ($profileBasic->religion_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="caste_id">{{ trans('fields.caste') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="caste_id" id="caste_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>

                    @isset($record['castes'])
                        @foreach ($record['castes'] as $value => $label)
                            <option value="{{ $label['id'] }}" data-religion-id="{{ $label['religion_id'] }}"
                                @selected(old('caste_id') ?? ($profileBasic->caste_id ?? '') == $label['id'])>{{ $label['title'] }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    {{-- <div class="col-sm-3">
        <div class="form-group autocomplete mb-3">
            <label class="form-label" for="sub_caste">{{ trans('fields.sub_caste') }}<span
                    class="require-star">*</span></label>
            <input class="form-control" id="sub_caste"
            type="text" name="sub_caste"
            value="{{ @old('sub_caste') ?? ($profileBasic->sub_caste->title ?? '') }}"
            placeholder="{{ trans('fields.sub_caste') }}">
        </div>
    </div> --}}

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="sub_caste_id">{{ trans('fields.sub_caste') }}<span
                    class="require-star">*</span></label>
            <div class="input-group" id="sub_caste_ids">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="sub_caste_id" id="sub_caste_id" class="form-control required "
                    data-live-search="true" -data-width="auto">
                    {{-- <option data-caste-id="" style="display:none" value="">-- Select --</option> --}}
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="temple">{{ trans('fields.temple') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" class="form-control required "
                    value="{{ old('temple') ?? ($profileBasic->temple ?? '') }}" id="temple" name="temple"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {

            //
            //
            //    $('#sub_caste_id').addClass('aiz-selectpicker').selectpicker('refresh');
            // $('#sub_caste_id').selectpicker("destroy");
            //  $('#sub_caste_id').selectpicker('refresh');
            //console.log('parthi')
            //$('#sub_caste_div').addClass('d-none');
            var currentCasteId = $('#caste_id').val();
            // console.log(currentCasteId);
            var isSubCasteId = '{{ $profileBasic->sub_caste_id ?? '' }}';

            if (currentCasteId) {
                $.ajax({
                    url: '/sub_caste',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        'caste_id': currentCasteId
                    },
                    success: function(data) {
                        $('#sub_caste_id').empty();
                        var selectedValue, subcaste, selected, slectedId;
                        $.each(data, function(id, title) {
                            selected = (isSubCasteId == id) ? 'selected' : '';
                            selectedValue = (isSubCasteId == id) ? title : '';
                            if (selectedValue) {
                                subcaste = selectedValue;
                            }
                            if (selected) {
                                slectedId = selected;
                            }
                            $('#sub_caste_id').append('<option value="' + id +
                                '" ' + slectedId + '>' + title + '</option>');
                        });
                        $('[data-id="sub_caste_id"]').html(subcaste);
                        $('[data-id="sub_caste_id"]').attr('title', '');
                        $('[data-id="sub_caste_id"]').attr('title', subcaste);
                        $('#sub_caste_id').selectpicker(
                            'refresh'); // Refresh if using a plugin like Bootstrap Select

                        // Optionally set the selected sub caste if editing
                        var currentSubCasteId = $('#sub_caste_id').data('selected');
                        // console.log("currentSubCasteId:", currentSubCasteId);
                        if (currentSubCasteId) {
                            $('#sub_caste_id').val(currentSubCasteId).selectpicker(
                                'refresh');
                        }
                    }
                });
            }
        });

        $('#caste_id').change(function() {
            var casteId = $(this).val();

            $.ajax({
                url: '/sub_caste',
                type: 'GET',
                dataType: 'json',
                data: {
                    'caste_id': casteId
                },
                success: function(data) {
                    $('#sub_caste_id').empty();
                    $('#sub_caste_id').append('<option value="">-- Select --</option>');
                    $.each(data, function(id, title) {
                        $('#sub_caste_id').append('<option value="' + id + '">' + title +
                            '</option>');
                    });
                    $('#sub_caste_id').selectpicker('refresh');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        function autocomplete(inp, arr, filter, filter_id) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            if (!inp) {
                return false;
            }
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/

                var fill_arr = arrayFilter();
                //console.log(fill_arr);
                for (i = 0; i < fill_arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    // if (fill_arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    if (fill_arr[i].toUpperCase().match(val.toUpperCase())) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + fill_arr[i] + "</strong>";
                        // b.innerHTML += fill_arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + fill_arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function arrayFilter() {
                var data = arr.map(function(arrs) {
                    if (arrs[filter_id] == filter.value) {
                        return arrs.title;
                    }
                });

                return data.filter(function(element) {
                    return element !== undefined;
                });
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        /*An array containing all the country names in the world:*/
        var sub_caste = JSON.parse('{!! collect($record['sub_castes'])->toJson() !!}');

        // var filter = document.getElementById("caste_id");
        // document.getElementById("caste_id").value = 1;
        // var filter_id = 'caste_id';

        // var filteredArray = sub_caste.filter(function(sub_caste) {
        //             return sub_caste[filter_id]  == filter.value;
        //         });

        // var filteredArray = sub_caste.map(function(sub_caste) {
        //     if(sub_caste[filter_id]  == filter.value) {
        //         return sub_caste.title;
        //     }
        // });
        // console.log(filteredArray);

        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("sub_caste"), sub_caste, document.getElementById("caste_id"), 'caste_id');
    </script>
    <style>
        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
            width: 100%;
        }



        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
@endpush
