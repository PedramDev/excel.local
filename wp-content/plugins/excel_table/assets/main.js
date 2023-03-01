var search_button = document.querySelector('#search_in_excel');

if(search_button){
    var col_text_1 = document.querySelector('#col1');
    var col_text_2 = document.querySelector('#col2');
    var col_text_3 = document.querySelector('#col3');
    var col_text_4 = document.querySelector('#col4');
    var col_text_5 = document.querySelector('#col5');
    var col_text_6 = document.querySelector('#col6');
    var col_text_7 = document.querySelector('#col7');


    function hasValue(param){
        if(param !== undefined){
            if(param.trim().length > 0){
                return true;
            }
        }
    }

    search_button.addEventListener('click',function(e){
        search_in_table();
    });

    function search_in_table(){
        // if(hasValue(col_text_1.value)){
            filter_row(col_text_1.value,'.excel-col1');
        // }
        // if(hasValue(col_text_2.value)){
            filter_row(col_text_2.value,'.excel-col2');
        // }
        // if(hasValue(col_text_3.value)){
            filter_row(col_text_3.value,'.excel-col3');
        // }
        // if(hasValue(col_text_4.value)){
            filter_row(col_text_4.value,'.excel-col4');
        // }
        // if(hasValue(col_text_5.value)){
            filter_row(col_text_5.value,'.excel-col5');
        // }
        // if(hasValue(col_text_6.value)){
            filter_row(col_text_6.value,'.excel-col6');
        // }
        // if(hasValue(col_text_7.value)){
            filter_row(col_text_7.value,'.excel-col7');
        // }
    }


    function filter_row(text,col){
        if(text !== undefined && hasValue(text)){
            document.querySelectorAll(`#excel_table tr.excel-row ${col}`).forEach(elem=>{
                if(elem.textContent.includes(text)){
                    elem.parentElement.style.display = 'table-row';
                }
                else{
                    elem.parentElement.style.display = 'none';
                }
            });
        }
        else{
            document.querySelectorAll(`#excel_table tr ${col}`).forEach(elem=>{
                elem.parentElement.style.display = 'table-row';
            });
        }
    }

    const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

    const comparer = (idx, asc) => (a, b) => ((v1, v2) =>
            v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
    document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
        const table = th.closest('table');
        Array.from(table.querySelector('tbody').querySelectorAll('tr:nth-child(n+2)'))
            .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
            .forEach(tr => table.querySelector('tbody').appendChild(tr) );
    })));

}