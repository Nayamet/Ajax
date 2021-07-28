function fetch()
            {
                var userName=document.getElementById("userName").value;
                let b=document.getElementById("b");

                if(userName.length==0)
                {
                    var XML= new XMLHttpRequest();
                    XML.onreadystatechange = function()
                    {
                        if(XML.status==200)
                        {
                            b.innerHTML=XML.responseText; 
                        }
                    };
                    XML.open('GET','Data.php?userName=' +userName,true);
                    XML.send();
                }
                else
                {
                    var XML= new XMLHttpRequest();
                    XML.onreadystatechange = function()
                    {
                        if(XML.status==200)
                        {
                            b.innerHTML=XML.responseText; 
                        }
                    };
                    XML.open('GET','Data.php?userName=' +userName,true);
                    XML.send();
            }
        }