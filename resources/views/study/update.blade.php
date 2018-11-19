@extends('layouts.layout')

@section('title', '勉強時間修正ページ')

@section('header')
    <div class="container">
        <h3>勉強時間や勉強項目を修正するページです。</h3>
        <p>修正したいレコードを選んでください。</p>
    </div>  
@endsection

@section('contents')
    <div class="container">
            <form action="/study/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$form->id}}">
                <ul class="list-group">
                    <li class="list-group-item">
                        勉強した科目　<input type="text" name="name" value="{{$form->name}}">
                    </li>
                    <li class="list-group-item">
                        学習日　<input type="date" name="date" value="{{$form->date}}">
                    </li>
                    <li class="list-group-item">
                    学習時間 
                    <select name="hour">
                        <option >{{$form->hour}}</option>
                        <option class="zero_h">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>        
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                    </select>         
                    時 
                    <select name="minute">
                        <option>{{$form->minute}}</option>
                        <option class="zero_m">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>        
                        <option>6</option>
                        <option>7</option>        
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>        
                        <option>13</option>        
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                        <option>35</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                        <option>45</option>
                        <option>46</option>
                        <option>47</option>
                        <option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
                        <option>53</option>
                        <option>54</option>
                        <option>55</option>
                        <option>56</option>
                        <option>57</option>
                        <option>58</option>
                        <option>59</option>                        
                    </select>
                    分
                </li>
                <li class="list-group-item">
                    <p>感想やコメントなど</p> 
                    <br>
                    <textarea class="comment_area" cols="30" rows="2" name="comment">{{$form->comment}}</textarea>
                </li>
            </ul>
            <br>
            <button type="submit" class="btn btn-primary">更新</button>    
        </form>
    </div>
@endsection

@section('footer')
    <div class="container">
        <p>Copyright たなしょ 2018</p>
    </div>
@endsection


