/**
 * @name jQuery move slider 
 * ©copyright - http://bdeveloper.ru/
 *
 * depend on jQuery
*/
(function($) {
	$(document).data('bd_resize_reinit', true);
	
	$.fn.bdmoveSlider = function(options) {
		if( !options ) options = {};
		
		// список элементов по умолчанию
		options = $.extend({
			innerPrefix: false, // задаёт префикс элементов которые будут искатся внутри слайдера
			adaptive: false, // Параметр устанавливает адаптивность слайдер
							 // если true то слайдер резиновый и элементы слайда растягиваются
							 // на всю ширину content box слайдера
			adaptiveHeight: false,
			start: 0, // парпметр задает с какого элемента начнется слайдшоу
					  // по умолчанию 0(1)
			prev: (options.innerPrefix || this.selector)+"__prev", // кнопка которая ведет на
																   // прдыдущий слайд
			next: (options.innerPrefix || this.selector)+"__next", // кнопка которая ведет на
																   // следующий слайд
			changeByBtn: true, // устанавливает будут ли кнопки prev, next
			list: (options.innerPrefix || this.selector)+"__list", // блок обертка всех слайдов
			listWidth: false, // Ширина списка слайдеров
			item: (options.innerPrefix || this.selector)+"__item", // блок слайд
			itemWidth: false, // ширина элемента слайда
			step: 1, // количество прокручиваемых слайдов одновременно
			info: false, // Если указать то сначала будет исчезать онфо блок
						 // а после перелистваться слайдер
						 // можно указать класс инфо блока или
						 // true - тогда будет взят элемент "*__item__info" — БЭМ.
			infoHideDuration: 300, // продолжильность исчезновения доп. блока
			infoShowDuration: 300, // продолжильность появления доп. блока
			easingInfo: "swing", // динамика исчезновения и появления инфоблока
			durationMove: 500, // задает время прокрутки слайдов
							   // ( Задержка перехода на следующий слайд )
			slidenator: false, // Параметр определяет слайденатор
							   // можно указать класс слайденатора
							   // или true тогда класс будет задан в стиле БЭМ
			slidenatorItem: (options.innerPrefix || this.selector)+"__slidenator__item", // задаем
																			   // slidenator__item
			slidenatorItemIn: '', // устанавливает внутренее HTML содержимое элемента слайденатора
			slidenatorActive: (options.innerPrefix || this.selector)+"__slidenator__item_active",
														  // активный класс элемента слайденатора
			slidenatorAfter: false, // Вставляем что либо после слайденатора
			insertSlidenatorAfter: false, // Параметр указывает после чего вставить слайденатор 
			timer: false, // если true то включается таймер
			interval: 10000, // задержка таймера
			timerToggle: (options.innerPrefix || this.selector)+"__toggle", // кнопка включения
																			// и отключения
																			// таймера
			toggleHTML: 'Старт:Стоп', // Текст или элемент который замещается при клике на переключатель
							   // таймера, синтаксис "Неактивный:Активный"
			easingMove: "swing", // динамика передвижения слайдов
			crop: false, // если true то последняя позиция определяется по ширине (content box)
						 // "*__crop",
						 // если селектор последня позиция определяется от ширины (content box)
						 // этого селектор
						 // по умолчанию последняя позиция определяется по
						 // ширине контейнера
			clickBtn: false, // событие клика на кнопки next, prev
			endMove: false, // события окончания прокрутки слайда
			slidenatorIndexes: '' // если устанавить true то в slidenator__item'ы будут
									 // добавлены числовые индексы
		}, options);
		
		var $container = this,
			$list = $container.find(options.list),
			$item = $container.find(options.item);
		
		// определяем область видимости сайдов
		if(options.crop && options.crop === true)
			var $crop = $container.find( (options.innerPrefix || this.selector)+"__crop" );
		else if(options.crop === false)
			$crop = $container;
		else
			$crop = options.crop;
			
		if( $item.length == 1 || $item.length <= Math.round($crop.width()/$item.width()) )
			return false;
		
		if(options.adaptive) {
			// определяем ширину item
			if(options.crop && options.crop !== true)
				var itemWidth = $container.find(options.crop).width();
			else
				itemWidth = $crop.width();
			
			$item.width(itemWidth);
			options.bd_resize_reinit = true;
			
			$(window).on('resize', function() {
				if(options.bd_resize_reinit) {
					options.bd_resize_reinit = false;
					
					// #timer
					if(options.timer && timerId) {
						clearInterval(timerId);
					};
					
					setTimeout(function() {
						// определяем ширину item
						if(options.crop && options.crop !== true)
							itemWidth = $container.find(options.crop).width();
						else
							itemWidth = $crop.width();
						
						$item.width(itemWidth);
						
						// устанавливаем ширину списка слайдеров и css position
						$list
						.width( options.listWidth || (itemWidth*($item.length+3)) )
						.css({
							left: -(-(Math.round(( parseInt($list.css("left")) / itemWidth ))) * itemWidth)
						});
						
						// #timer
						if(options.timer && timerId) {
							timerId = setInterval(checkArr, options.interval);
						};
						
						options.bd_resize_reinit = true;
					}, 25);
				}
			});
		} else {
			itemWidth = options.itemWidth || $item.eq(1).outerWidth(true);
		}
		
		// устанавливаем ширину списка слайдеров и css position
		$list
		.width( options.listWidth || (itemWidth*($item.length+3)) )
		.css({position: "relative", left: -(options.start * itemWidth) });
		
		// если своиство установлено задаем ширину элементам слайдера
		if( options.itemWidth ) {
			$item.width( itemWidth );
		}
			
		// #info скрываем блоки с информацией
		if(options.info) {
			var info_elems = options.info !== true ? $container.find(options.info) :
					$container.find((options.innerPrefix || this.selector)+"__info");
			
			info_elems.hide().eq(options.start).show();
		};
		
		// #slidenator
		if(options.slidenator) {
			var slidenatorName = options.slidenator !== true ?
												options.slidenator:
												(options.innerPrefix || this.selector)+"__slidenator",
			$slidenator = $('<span class="'+slidenatorName.slice(1)+'"></span>'),
			
			// переменная определяющая множественный слайдер или нет
			is_multiple = $crop.width() > $item.outerWidth(true);
			
			if(is_multiple)
				var item_length = $item.length/Math.round($crop.width()/$item.width());
			else
				item_length = $item.length;
			
			// вставка slidenator__item
			for(var i = 0; i < item_length; i++) {
				$slidenator.append('<span class="'+options.slidenatorItem.slice(1)+'">'+
										options.slidenatorItemIn +
										(options.slidenatorIndexes && (i+1))
								   +'</span>')
			};
				
			// вставляем что либо после слайденатора
			if(options.slidenatorAfter)
				$slidenator.after( options.slidenatorAfter);
			
			$slidenator.find( options.slidenatorItem )
			 .eq(options.start).addClass( options.slidenatorActive.slice(1) );
			
			// #slidenator обработчик события клика на элементах слайденатора
			$slidenator.on("click", options.slidenatorItem,  slideToMove);
			
			if(options.insertSlidenatorAfter)
				$(options.insertSlidenatorAfter).after( $slidenator )
			else
				$container.append( $slidenator );
		}
		
		
		// #prev, #next вспомогательные переменные
		if(options.changeByBtn) {
			var $prev = $('<span class="'+options.prev.slice(1)+'"></span>'),
				$next = $('<span class="'+options.next.slice(1)+'"></span>');
				
			$container.append($prev).append($next);
			// вешаем функции обработчики события на кнопки вправо и влево
			$prev.on("click", checkArr);
			$next.on("click", checkArr);
		}
		
		// #timer
		if(options.timer) {
			var timerId = setInterval(checkArr, options.interval),
				toggleHTML = options.toggleHTML,
				$timerBtn = $('<span class="'+options.timerToggle.slice(1)+'">'+
								toggleHTML.slice(toggleHTML.indexOf(':')+1)
							+'</span>');
			$container.append($timerBtn);
			
			// вешаем функцию обработчик на кнопку options.timerToggle
			$timerBtn.toggle(function() {
				clearInterval(timerId);
				timerId = false;
				
				$(this).html(toggleHTML.slice(0, toggleHTML.indexOf(':')));
			}, function() {
				timerId = setInterval(checkArr, options.interval);
				
				$(this).html(toggleHTML.slice(toggleHTML.indexOf(':')+1));
			});
		};
		
		// функция обработчик клика по стрелочкам (options.prev, options.next)
		function checkArr(param) {
			if( options.clickBtn )
				options.clickBtn();
			
			//вспомогательные переменные
			var currentPos = parseInt( $list.css("left") ),
				maxVisibleItems = Math.round( $crop.width() / itemWidth ),
				maxPos = -(itemWidth*($item.length-maxVisibleItems)),
				minPos = 0,
				isLeft = false;
				
			// if #slidenator = true and is_multiple
			if(options.slidenator && is_multiple)
				var widthMove = $crop.width()+parseInt($item.css('margin-right'));
			else
				widthMove = itemWidth * options.step;
			
			if(this.className) {
				var prevClassArr = this.className.split(" ");
				
				for(var i=0; i<prevClassArr.length ; i++) {
					if(prevClassArr[i] == options.prev.slice(1)) {
						isLeft = prevClassArr[i];
						break;
					};
				};
			};
			
			// если нажали на prev (предыдущий слайд)
			if(isLeft) {
				// если текущая позиция равна минимальной позиции
				if(currentPos >= minPos) {
					toMove(maxPos);
				} else {
					// если текущая позиция больше либо равна
					// 2-ой позиции ( предпоследней с начала )
					if(currentPos >= -(widthMove) )
						toMove(0);
					else
						toMove("+="+widthMove);
				};
			} else {
				// если текущая позиция больше чем максимальной позиции
				if(currentPos > maxPos) {
					// если текущая позиция будет меньше либо
					// равна предпоследней позиции ( с конца )
					if(currentPos <= maxPos+widthMove)
						toMove(maxPos);
					else
						toMove("-="+widthMove);
				} else {
					toMove(0);
				};
			};
		};
		
		// Функция непосредственного движения слайдов ( анимации слайдов )
		// @param leftValue {number} - левая позиция списка слайдов
		// @param duration {number} - время смены слайда
		function toMove(leftValue) {
			// #info, #slidenator вычисляем индекс текущего элемента слайденатора
			if(options.info || options.slidenator)
				var	currentElem = Math.round( -(parseInt( $list.css("left"))) / itemWidth );
				
			if(options.info) {
				// #info скрываем блок с информацией
				$($item.get(currentElem))
				.find(info_elems)
				.fadeOut(options.infoHideDuration, options.easingInfo , function() {
					// #info очищаем очередь функция у блока с информацией
					$(this).stop(true);
					
					// #slidenator удоляем класс активности у элемента слайденатора
					if(options.slidenator)
						$slidenator.find(options.slidenatorItem)
						  .removeClass(options.slidenatorActive.slice(1));
					
					move();
				});
			} // if
			else {
				// #slidenator удоляем класс активности у элемента слайденатора
				if(options.slidenator)
					$slidenator.find(options.slidenatorItem)
					  .removeClass(options.slidenatorActive.slice(1));
					  
				move();
			}
			
			// вспомогательная функция
			function move() {
				// сдвигаем до нужного слайда
				$list.animate({
					left: leftValue
				}, options.durationMove, options.easingMove, function () {
					// очищаем очередь эффектов у блока списка слайдов
					$(this).stop(true);
					
					// #timer очищаем таймер и заного его активируем
					if(options.timer && timerId) {
						clearInterval(timerId);
						timerId = setInterval(checkArr, options.interval);
					};
					
					// вычисляем индекс слайда на который перешли
					// if #slidenator = true and is_multiple
					if(options.slidenator && is_multiple)
						var widthMove = $crop.width()+parseInt($item.css('margin-right'));
					else
						widthMove = itemWidth;
					
					currentElem = Math.ceil( -(parseInt( $list.css("left"))) / widthMove );
					
					// #slidenator добавляем элементу слайденатора класс активности
					if(options.slidenator)
						$($slidenator.find(options.slidenatorItem).get(currentElem))
						.addClass(options.slidenatorActive.slice(1));
					
					// #info показываем блок с информацией
					if(options.info)
						$($item.get(currentElem))
						.find(info_elems)
						.fadeIn(options.infoShowDuration, options.easingInfo , function() {
							// #info очищаем очередь функция у блока с информацией
							$(this).stop(true);
						});
					
					if( options.endMove )
						options.endMove();
					
					if (options.adaptiveHeight) {
						$crop.animate({
							height: $($item.get(currentElem)).height()
						}, 200);
					}
				});
			};
		};
		
		// #slidenator функция обработчик клика на элементы слайденатора
		function slideToMove() {
			var index = $(this).index();
			
			if(is_multiple) {
				// вспомогательные переменные
				var maxVisibleItems = Math.round( $crop.width() / itemWidth ),
					maxPos = -(itemWidth*($item.length-maxVisibleItems)),
					leftPos = -(index*($crop.width()+
								(index ? parseInt($item.css('margin-right')) : 0))),
					currentElem = Math.ceil( -(parseInt( $list.css("left"))) /
								  ($crop.width()+parseInt($item.css('margin-right'))));
				// если индекс текущего элемента не равен индексу
				// элемента на который мы собираемся идти тогда выполнить
				if(currentElem != index) {
					if(index == ($container.find(options.slidenatorItem).length-1))
						toMove(maxPos);
					else
						toMove(leftPos);
				}
			} else {
				leftPos = -(index*itemWidth),
				currentElem = Math.round( -(parseInt( $list.css("left"))) / itemWidth );
					
				// если индекс текущего элемента не равен индексу
				// элемента на который мы собираемся идти тогда выполнить
				if(currentElem != index)
					toMove(leftPos);
			}
		};
		
		
		return this;
	};
})(jQuery);


/* |===============| Инициализация |===============| */

/* |===============| Инициализация |===============| */
$(function() {
	$('.slider').bdmoveSlider({
		slidenator: true,
		changeByBtn: false,
		adaptive: true,
		adaptiveHeight: true
	});
	
	$('.p-box_slider').bdmoveSlider({
		innerPrefix: '.p-box',
		step: 2,
		durationMove: 500
	});
	
	$('.box_right').bdmoveSlider({
		innerPrefix: '.box'
	});
});