import React from "react";
import PageLayout from "../../Components/PageLayout/PageLayout";
import Card from "../../Components/Card/Card";
import "./Shop.scss";

const Shop = () => {
    return (
        <PageLayout>
            <div className="page">
                <div className="item-list">
                    {Array(5)
                        .fill({})
                        .map((_, index) => {
                            return <Card />;
                        })}
                </div>
            </div>
        </PageLayout>
    );
};

export default Shop;
