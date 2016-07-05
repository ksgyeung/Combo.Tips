//inject.js


function setGlobalBoardByJSONBoard(jsonBoardStr)
{
	var jsonBoard = JSON.parse(jsonBoardStr);
	/*
	for(var y=0;y<jsonBoard.length;y++)
	{
		for(var x=0;x<jsonBoard[y].length;x++)
		{
			global_board[y][x] = jsonBoard[y][x]
		}
	}
	*/
	global_board = jsonBoard;
	show_board(global_board);
}

function tellHostSolutionPath(x,y,path)
{
	var obj = {"type":"solution","x":x,"y":y,"path":path};
	document.title = JSON.stringify(obj);
}

$('#solutions').on('click', 'li', function(e) 
{
	show_board(global_board);
	global_index = $(this).index();
	var solution = global_solutions[global_index];
	var path = draw_path(solution.init_cursor, solution.path);
	var hand_elem = $('#hand');
	hand_elem.stop(/*clearQueue*/true).show();
	path.forEach(function(xy, i)
	{
		var left = xy.x + 13;
		var top = xy.y + 13;
		hand_elem[i == 0 ? 'offset' : 'animate']({left: left, top: top});
	});
	$('#solutions li.prev-selection').removeClass('prev-selection');
	$(this).addClass('prev-selection');

	var y = solution.init_cursor.row;
	var x = solution.init_cursor.col;
	var path = solution.path;
	tellHostSolutionPath(x,y,path);
});

