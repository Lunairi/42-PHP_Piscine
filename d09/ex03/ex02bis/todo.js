var list = [];

var cookies = function()
{
	var cookies = document.cookie.substring(5).split(',');
	if (cookies[0] != "")
		for (var i = 0; i < cookies.length; ++i)
		{
			list.push(cookies[i]);
			ft_add_item(cookies[i], false);
		}
}

var increase = function() 
{
	var update = list.join(",");
	document.cookie = "item=" + update;
}

var add = function(task, entry)
{
	if (task != null && task != "")
	{
		var item = document.createElement('div');
		item.className = "todo";
		item.innerHTML = task;
		if (entry === true)
		{
			list.push(task);
			increase();
		}
		item.onclick = function()
		{
			remove(this);
		}
		document.getElementById('ft_list').prepend(item);
	}
}

var remove = function(item)
{
	if (confirm("Remove this item?"))
	{
		var index = list.indexOf(item.innerHTML);
		list.splice(index, 1);
		increase();
		item.remove();
	}
}

$('#new').click(function()
{
	add(prompt("Enter new task:"), true);
});

cookies();
