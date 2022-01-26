<header class="header">
    <div class="grid">
        <div class="header-wraper">
            <div class="header">
                <div class="container container--md w--100">
                    <div class="row middle-xs">
                        <div class="col-xs-10 col-md-6 is-flex align-center flex-nowrap">
                            <a href="#" class="header__logo is-in-line-block nuxt-link-exact-active nuxt-link-active">
                                <img src="{{ url('images/logo.png') }}" alt="">
                            </a>
                            <div class="app-header-search is-flex">
                                <div class="search__wrapper">
                                    <div class="search-box">
                                        <div class="search-field__wrap is-relative">
                                            <div class="search-location">
                                                <div class="booking__field is-relative">
                                                    <i class="fas fa-search mr--12"></i>
                                                    <div class="booking__input">
                                                        <input type="text" placeholder="Tìm kiếm" class="booking__input-text bold">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="search-date mt--12 mt--md--0">
                                                <div class="booking__field">
                                                    <i class="far fa-calendar mr--12"></i>
                                                    <div class="date-search-button">
                                                        <div class="datepicker-range">
                                                            <button id="trigger-date-range" class="btn btn-outline--gray btn-xs search-filter__button">Ngày</button>
                                                            <div class="asd__wrapper asd__wrapper--datepicker-open" style="position: absolute; top: 54px; left: 0px; width: 700px; z-index: 100; display:none">
                                                                <div class="asd__datepicker-header">
                                                                    <div class="asd__change-month-button asd__change-month-button--previous">
                                                                        <button type="button">
                                                                            <i class="fas fa-arrow-left"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="asd__change-month-button asd__change-month-button--next">
                                                                        <button type="button">
                                                                            <i class="fas fa-arrow-right"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="asd__days-legend" style="width: 350px; left: 0px;">
                                                                        <div class="asd__day-title">Mon</div>
                                                                        <div class="asd__day-title">Tue</div>
                                                                        <div class="asd__day-title">Wed</div>
                                                                        <div class="asd__day-title">Thu</div>
                                                                        <div class="asd__day-title">Fri</div>
                                                                        <div class="asd__day-title">Sat</div>
                                                                        <div class="asd__day-title">Sun</div>
                                                                    </div>
                                                                    <div class="asd__days-legend" style="width: 350px; left: 350px;">
                                                                        <div class="asd__day-title">Mon</div>
                                                                        <div class="asd__day-title">Tue</div>
                                                                        <div class="asd__day-title">Wed</div>
                                                                        <div class="asd__day-title">Thu</div>
                                                                        <div class="asd__day-title">Fri</div>
                                                                        <div class="asd__day-title">Sat</div>
                                                                        <div class="asd__day-title">Sun</div>
                                                                    </div>
                                                                </div>
                                                                <div class="asd__inner-wrapper" style="margin-left: -350px;">
                                                                    <div class="asd__month asd__month--hidden" style="width: 350px;">
                                                                        <div class="asd__month-name">
                                                                            <span>December</span>
                                                                            <span>2021</span>
                                                                        </div>
                                                                        <table class="asd__month-table">
                                                                            <tbody>
                                                                                <tr class="asd__week">
                                                                                    <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>1</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>2</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>3</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>4</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>5</button>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>6</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>7</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>8</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>9</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>10</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>11</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>12</button>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>13</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>14</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>15</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>16</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>17</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>18</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>19</button>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>20</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>21</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>22</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>23</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>24</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>25</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>26</button>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>27</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>28</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>29</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>30</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>31</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                        <button type="button" class="asd__day-button" disabled>32</button>
                                                                                    </td>
                                                                                    <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="asd__month" style="width: 350px;">
                                                                        <div class="asd__month-name">
                                                                            <span>January</span>
                                                                            <span>2022</span>
                                                                        </div>
                                                                        <table class="asd__month-table">
                                                                            <tbody>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>1</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>2</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>3</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>4</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>5</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>6</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>7</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>8</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>9</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>10</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>11</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>12</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>13</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>14</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>15</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>16</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>17</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>18</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>19</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>20</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>21</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>22</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>23</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>24</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>25</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>26</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>27</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>28</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>29</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>30</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>31</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="asd__month" style="width: 350px;">
                                                                        <div class="asd__month-name">
                                                                            <span>February</span>
                                                                            <span>2022</span>
                                                                        </div>
                                                                        <table class="asd__month-table">
                                                                            <tbody>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>1</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>2</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>3</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>4</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>5</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>6</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>7</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>8</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>9</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>10</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>11</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>12</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>13</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>14</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>15</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>16</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>17</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>18</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>19</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>20</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>21</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>22</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>23</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>24</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>25</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>26</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>27</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>28</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="asd__month asd__month--hidden" style="width: 350px; display:none">
                                                                        <div class="asd__month-name">
                                                                            <span>February</span>
                                                                            <span>2022</span>
                                                                        </div>
                                                                        <table class="asd__month-table">
                                                                            <tbody>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>1</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>2</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>3</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>4</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>5</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>6</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>7</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>8</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>9</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>10</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>11</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>12</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>13</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>14</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>15</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>16</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>17</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>18</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>19</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>20</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>21</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>22</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>23</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>24</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>25</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>26</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>27</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>28</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="asd__month asd__month--hidden" style="width: 350px; display:none">
                                                                        <div class="asd__month-name">
                                                                            <span>March</span>
                                                                            <span>2022</span>
                                                                        </div>
                                                                        <table class="asd__month-table">
                                                                            <tbody>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>1</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>2</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>3</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>4</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>5</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>6</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>7</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>8</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>9</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>10</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>11</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>12</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>13</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>14</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>15</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>16</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>17</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>18</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>19</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>20</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>21</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>22</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>23</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>24</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>25</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>26</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>27</button>
                                                                                        </td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="asd__week">
                                                                                    <td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>28</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>29</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>30</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--enabled asd__day--disabled" style="width: 45.7143px; color: rgb(86, 90, 92);">
                                                                                            <button type="button" class="asd__day-button" disabled>31</button>
                                                                                        </td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                        <td class="asd__day asd__day--empty" style="width: 45.7143px; color: rgb(86, 90, 92);"></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="asd__action-buttons">
                                                                    <button type="button">Đóng</button>
                                                                    <button type="button">Áp dụng</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="search-guest mt--12 mt--md--0 cursor">
                                                <div class="booking__field is-relative">
                                                    <i class="fas fa-user mr--12"></i>
                                                    <div class="booking__input">
                                                        <p>Số khách</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="booking__btn btn btn--secondary bold mt--12 mt--md--0">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2 end-xs col-md-6 menu-wrapper">
                            <a href="#" class="menu-mobile--open" style="display: none">
                                <i class="fas fa-bars"></i>
                            </a>
                            <ul class="menu is-flex end-xs middle-xs">
                                <li class="menu__item is-logo" style="display: none"></li>
                                <li class="menu__item">
                                    <a href="#" class="menu__link bold d-inline-block">Guide</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#" class="menu__link is-become-host d-inline-block">Host</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#" class="menu__link bold">Đăng ký</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#" class="menu__link bold">Đăng nhập</a>
                                </li>
                                <li class="menu__item is-relative">
                                    <div>
                                        <span class="menu__link btn--dropdown semi-bold is-flex middle-xs is-relative pointer">
                                            <img src="{{ url('images/vi.svg') }}" width="24" height="24" alt="">
                                            <span class="ml--6">VND</span>
                                        </span>
                                    </div>
                                    <div class="popover" style="display:none">
                                        <div class="row is-relative currency-box">
                                            <div class="col-md-6 col-xs-12">
                                                <a href="#" class="is-flex middle-xs is-relative pointer">
                                                    <img src="{{ url('images/vi.svg') }}" width="16" height="16" alt="">
                                                    <span class="px--12">Tiếng Việt</span>
                                                </a>
                                                <a href="#" class="is-flex middle-xs is-relative pointer">
                                                    <img src="{{ url('images/en.svg') }}" width="16" height="16" alt="">
                                                    <span class="px--12">English</span>
                                                </a>
                                                <a href="#" class="is-flex middle-xs is-relative pointer">
                                                    <img src="{{ url('images/ko.svg') }}" width="16" height="16" alt="">
                                                    <span class="px--12">Korea</span>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <a href="#" class="is-flex middle-xs is-relative pointer">
                                                    <b>VND</b>
                                                    <span class="px--12">Việt Nam Đồng</span>
                                                </a>
                                                <a href="#" class="is-flex middle-xs is-relative pointer">
                                                    <b>USD</b>
                                                    <span class="px--12">United States Dollar</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-mobile--close" style="display: none">
                                    <img src="{{ url('images/close.svg') }}" width="24" height="24" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>