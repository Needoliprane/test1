import React, { useState } from "react";
import PageLayout from "../../Components/PageLayout/PageLayout";
import leftArrow from "../../Assets/images/left-arrow.svg";
import "./ProductPage.scss";
import { Link } from "react-router-dom";
import Skeleton from "react-loading-skeleton";

type Product = {
    id: number;
    img: string;
    name: string;
    description: string;
    price: string;
};

type Props = {
    isEdit?: boolean;
};

const ProductPage: React.FC<Props> = ({ isEdit }) => {
    const [product, setproduct] = useState<Product | undefined>();
    return (
        <PageLayout>
            <div className="product-page">
                <Link to="/" className="return-button">
                    <img src={leftArrow} alt="return" className="return-img" />
                    <p className="return-text">Retour</p>
                </Link>
                <div className="product-details">
                    <div className="product-image-container">
                        {product?.img ? (
                            <img className="product-image" alt="product" />
                        ) : (
                            <Skeleton width={550} height={600} />
                        )}
                        {isEdit && (
                            <input placeholder="https://test.com/pic/2" />
                        )}
                    </div>
                    <div className="product-info">
                        {isEdit ? (
                            <input placeholder="Name" />
                        ) : (
                            <h2 className="product-name">Name</h2>
                        )}
                        <p className="product-availability">En Stock !</p>
                        {isEdit ? (
                            <textarea
                                placeholder="Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Voluptatem nulla ipsa possimus
                            saepe ut rerum ratione sint. Consequatur ab
                            provident earum ratione blanditiis assumenda
                            maxime! Suscipit blanditiis corrupti quis
                            asperiores. Laborum dignissimos vel qui, odit
                            porro beatae delectus, ducimus inventore
                            possimus sit consequatur expedita in
                            consequuntur vitae deleniti distinctio illum
                            placeat fugiat reprehenderit aut officia
                            laboriosam omnis. Praesentium, temporibus nisi!
                            Iste a nemo obcaecati assumenda tempora,
                            voluptatem quisquam deserunt mollitia amet
                            magni, non reprehenderit distinctio eius
                            dignissimos atque vitae? Blanditiis doloremque
                            molestias iusto aperiam sequi officia facilis
                            tempore perferendis natus!"
                                style={{ width: "100%", minHeight: "50%" }}
                            />
                        ) : (
                            <p className="product-description">
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Voluptatem nulla ipsa possimus
                                saepe ut rerum ratione sint. Consequatur ab
                                provident earum ratione blanditiis assumenda
                                maxime! Suscipit blanditiis corrupti quis
                                asperiores. Laborum dignissimos vel qui, odit
                                porro beatae delectus, ducimus inventore
                                possimus sit consequatur expedita in
                                consequuntur vitae deleniti distinctio illum
                                placeat fugiat reprehenderit aut officia
                                laboriosam omnis. Praesentium, temporibus nisi!
                                Iste a nemo obcaecati assumenda tempora,
                                voluptatem quisquam deserunt mollitia amet
                                magni, non reprehenderit distinctio eius
                                dignissimos atque vitae? Blanditiis doloremque
                                molestias iusto aperiam sequi officia facilis
                                tempore perferendis natus!
                            </p>
                        )}
                    </div>
                    <div className="product-order">
                        {isEdit ? (
                            <input
                                className="have-currency"
                                placeholder="19,99€"
                            />
                        ) : (
                            <p className="product-price have-currency">19,99</p>
                        )}
                        {!isEdit && (
                            <button className="btn add-to-cart">
                                Ajouter au panier
                            </button>
                        )}
                    </div>
                </div>
                {isEdit && (
                    <div className="utils-btn">
                        <button className="btn edit delete">Supprimer</button>
                        <button className="btn edit save">Enregister</button>
                    </div>
                )}
            </div>
        </PageLayout>
    );
};

export default ProductPage;
