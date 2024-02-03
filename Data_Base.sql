BEGIN;


CREATE TABLE IF NOT EXISTS public."Заказ"
(

    CONSTRAINT "Заказ_pkey" PRIMARY KEY ("id_Заказа")
);

CREATE TABLE IF NOT EXISTS public."Клиент"
(

    CONSTRAINT "Клиент_pkey" PRIMARY KEY ("id_Клиента")
);

CREATE TABLE IF NOT EXISTS public."Поставщик"
(

    CONSTRAINT "Поставщик_pkey" PRIMARY KEY ("id_Поставщика")
);

CREATE TABLE IF NOT EXISTS public."Работник"
(

    CONSTRAINT "Работник_pkey" PRIMARY KEY ("id_Работника")
);

CREATE TABLE IF NOT EXISTS public."Руководитель"
(

    CONSTRAINT "Руководитель_pkey" PRIMARY KEY ("id_Руководителя")
);

CREATE TABLE IF NOT EXISTS public."Товар"
(

    CONSTRAINT "Товар_pkey" PRIMARY KEY ("id_Товара")
);

ALTER TABLE IF EXISTS public."Заказ"
    ADD CONSTRAINT "Заказ_id_Клиента_fkey" FOREIGN KEY ("id_Клиента")
    REFERENCES public."Клиент" ("id_Клиента") MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;


ALTER TABLE IF EXISTS public."Заказ"
    ADD CONSTRAINT "Заказ_id_Работника_fkey" FOREIGN KEY ("id_Работника")
    REFERENCES public."Работник" ("id_Работника") MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;


ALTER TABLE IF EXISTS public."Заказ"
    ADD CONSTRAINT "Заказ_id_Руководителя_fkey" FOREIGN KEY ("id_Руководителя")
    REFERENCES public."Руководитель" ("id_Руководителя") MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;


ALTER TABLE IF EXISTS public."Поставщик"
    ADD CONSTRAINT "Поставщик_id_Руководителя_fkey" FOREIGN KEY ("id_Руководителя")
    REFERENCES public."Руководитель" ("id_Руководителя") MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;


ALTER TABLE IF EXISTS public."Товар"
    ADD CONSTRAINT "Товар_id_Заказа_fkey" FOREIGN KEY ("id_Заказа")
    REFERENCES public."Заказ" ("id_Заказа") MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;


ALTER TABLE IF EXISTS public."Товар"
    ADD CONSTRAINT "Товар_id_Поставщика_fkey" FOREIGN KEY ("id_Поставщика")
    REFERENCES public."Поставщик" ("id_Поставщика") MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;

END;