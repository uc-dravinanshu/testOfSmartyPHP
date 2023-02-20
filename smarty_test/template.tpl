<br/><br/>
{*Question: 4*}
{$someContent|truncate} <br/>
{$someContent|truncate:20} <br/>
{$someText|truncate:30:"":true} <br/>
{$someText|truncate:30:"---":true} <br/>
{$someText|truncate:10:"....":true:true}<br/>


{*Ques: 5*}
{$countChar|count_characters} <br/>
{$countPara|count_paragraphs} <br/>
{$countSen|count_sentences} <br/>
{$countWord|count_words} <br/>


{*Ques: 6*}  
{foreach $start as $index} 
  {if $index@first}
    {continue} 
  {/if}
  {$index}
{/foreach}


{*Question: 7*}
<br/><br/>
{foreach $myColor as $color} 
  {$color}
 {foreachelse} 
    no colors found...
{/foreach}


{*Question: 8*} 
<br/><br/>
{foreach $Contacts as $contact}
{"Fax : {$contact.fax}"}<br>
{"Email : {$contact.email}"}<br>
{"Phone:  Home : {$contact.phone.home}"}<br>
{"Phone:  Cell : {$contact.phone.cell}"}<br>
{/foreach}

{*Ques: 9. What is the difference between counter and cycle in smarty? Show the difference using examples.*}
<br/><br/>
{counter start=1 skip=1} 
{counter} 
{counter}

<p>
    <ul>
        {section "foreach" loop=3} 
          <li>{cycle values="even, odd"}</li>
        {/section}
    </ul>
</p>


{*Ques: 10*}
{$count|count}
